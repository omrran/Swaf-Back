<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  use HasFactory;

  protected $fillable = [
    'id',
    'OrderDate',
    'OrderNumber',
    'CustomerId',
    'TotalAmount'
  ];
  public function customer()
  {
    return $this->belongsTo(Customer::class, 'CustomerId', 'id');
  }

  public function orderItems()
  {
    return $this->hasMany(OrderItem::class,'OrderId','id');
  }
}
