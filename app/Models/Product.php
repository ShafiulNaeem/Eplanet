<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'tax',
        'color',
        'size',
        'model',
        'product_price',
        'stock',
        'manufactured_by',
        'brand_id',
        'category_id',
        'admin_id',
        'admin_role',
        'feature_image',
        'unique_id',
        'coupon_id',

        ];
    public function productImages()
    {
        return $this->hasMany('App\ProductImage','product_id','id');
    }
}
