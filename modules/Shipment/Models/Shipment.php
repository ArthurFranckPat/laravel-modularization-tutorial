<?php

namespace Modules\Shipment\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'provider',
        'order_id',
        'provider_shipment_id',
    ];
}
