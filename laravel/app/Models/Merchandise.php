<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'brand',
        'description',
        'retail_price',
        'whole_sale_price',
        'whole_sale_qty',
        'qty_stock'
    ];
}
