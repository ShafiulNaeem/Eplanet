<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsSlider extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeGetActive($query)
    {
        return $query->where('status', 1);
    }
}
