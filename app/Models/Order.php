<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'total_in_cents',
        'payment_gateway',
        'payment_id',
    ];
    protected $casts = [
        'user_id' => 'integer',
        'total_in_cents' => 'integer'
    ];
}
