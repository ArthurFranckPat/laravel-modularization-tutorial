<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    protected $fillable = [
        'product_price_in_cents',
        'quantity',
        'order_id',
        'product_id',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'order_id' => 'integer',
        'product_id' => 'integer',
        'product_price_in_cents' => 'integer'
    ];
}

