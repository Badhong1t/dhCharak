<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{

    protected $fillable = [

        'title',
        'system_name',
        'email',
        'contact_number',
        'company_open_hour',
        'copyright_text',
        'address',
        'description',
        'logo',
        'favicon',

    ] ;

}
