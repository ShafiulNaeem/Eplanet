<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $table = 'product_images';
    protected $primaryKey = 'id';
    protected $fillable = ['product_image','product_id'];
    protected $guarded = [];
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
