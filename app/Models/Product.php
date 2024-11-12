<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Product extends Model
{

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'title',
        'slug',
        'sku',
        'barcode',
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
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function attribute_values()
    {
        return $this->belongsToMany(AttributeValue::class,'product_attribute_values','product_id','attribute_value_id')->withPivot('attribute_id')->groupBy('attribute_id');
    }

    

}
