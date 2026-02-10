<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'product_id',
        'total_price',
        'shipping_name',
        'shipping_address',
        'shipping_city',
        'shipping_state',
        'shipping_zip',
        'shipping_phone',
        'payment_method',
        'payment_status',
        'order_status',
    ];


    public function user()
    {
        return $this->belongsTo(User::class , "user_id");
    }

    public function product () {
        return $this->belongsTo(Product::class,"product_id");
    }
}
