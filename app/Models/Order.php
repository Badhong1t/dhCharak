<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'order_number','name', 'email', 'phone', 'address', 'city', 'island', 'state', 'postal_code', 'country', 'shipping_cost', 'tax', 'total', 'status'];
}
