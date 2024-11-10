<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CMS extends Model
{

    protected $fillable = [
        'page',
        'section_name',
        'title',
        'sub_title',
        'image',
        'short_description',
        'description',
        'status'
    ];

}
