<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'sub_categories';

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'sub_categories_id');
    }

}
