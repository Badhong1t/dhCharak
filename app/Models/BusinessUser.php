<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessUser extends Model
{
    protected $fillable = [
        'user_id',
        'business_name',
        'trade_license',
    ];

}
