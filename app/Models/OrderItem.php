<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [
        'id',
        'OrderId',
        'ProductId',
        'UnitPrice',
        'Quantiy'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'OrderId', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductId', 'id');
    }
}
