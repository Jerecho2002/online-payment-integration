<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'reference_number',
        'amount',
        'status',
        'paymongo_checkout_id',
        'payment_status'
    ];
}
