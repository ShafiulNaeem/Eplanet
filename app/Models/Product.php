<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    //protected $foreignKey = 'sub_categories_id';

    protected $guarded = [];

    public function productImages()
    {
        return $this->hasMany('App\Models\ProductImage','product_id','id');
    }
    public function productVideos()
    {
        return $this->hasMany('App\Models\ProductVideo','product_id','id');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Models\SubCategory');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
}
