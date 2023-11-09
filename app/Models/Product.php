<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'ProductName',
        'SupplierId',
        'UnitPrice'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'SupplierId', 'id');
    }

    public function orderItems()
    {
      return $this->hasMany(OrderItem::class,'ProductId','id');
    }
}
