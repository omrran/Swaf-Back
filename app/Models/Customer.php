<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'FirstName',
        'LastName',
        'City',
        'Country',
        'Phone'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'CustomerId', 'id');
    }
}
