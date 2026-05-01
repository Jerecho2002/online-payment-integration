<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Order;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function checkout()
    {
        $order = Order::create([
            'reference_number' => Str::uuid(),
            'amount' => 50000,
            'status' => 'pending'
        ]);

        $response = Http::withBasicAuth(env('PAYMONGO_SECRET_KEY'), '')
            ->post('https://api.paymongo.com/v1/checkout_sessions', [
                'data' => [
                    'attributes' => [
                        'line_items' => [[
                            'currency' => 'PHP',
                            'amount' => $order->amount,
                            'name' => 'Order',
                            'quantity' => 1
                        ]],
                        'payment_method_types' => ['gcash', 'card'],
                        'success_url' => route('payment.success'),
                        'cancel_url' => route('payment.cancel'),
                    ]
                ]
            ]);

        if (!$response->successful()) {
            return "Payment failed.";
        }

        $order->update([
            'paymongo_checkout_id' => $response['data']['id']
        ]);

        return redirect($response['data']['attributes']['checkout_url']);
    }

    public function success()
    {
        return view('success');
    }

    public function cancel()
    {
        return view('welcome');
    }
}
