<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Product\Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'stock',
    ];
    public static function factory() : ProductFactory
    {
        return new ProductFactory();
    }
}
