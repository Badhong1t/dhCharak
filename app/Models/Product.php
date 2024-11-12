<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'title',
        'slug',
        'sku',
        'barcode',
        'attribute_id',
        'attribute_value_id',
        'customer_price',
        'business_price',
        'quantity',
        'description',
        'short_description',
        'additional_information',
        'images',
        'thumbnail',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }
}
