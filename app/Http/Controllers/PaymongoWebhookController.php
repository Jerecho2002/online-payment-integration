<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Log;

class PaymongoWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $type = $request->input('data.attributes.type');

        if ($type === 'checkout_session.payment.paid') {

            $checkoutId = $request->input('data.attributes.data.id');

            $order = Order::where('paymongo_checkout_id', $checkoutId)->first();

            if ($order) {
                $order->update([
                    'status' => 'paid',
                    'payment_status' => 'paid'
                ]);
            } else {
                Log::error('Order NOT FOUND: ' . $checkoutId);
            }
        }

        return response()->json(['status' => 'ok']);
    }
}
