<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'email', 'password', 'lname', 'phone', 'is_verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blogs()
    {
        return $this->hasMany('App\Models\Blog');
    }

    public function coments()
    {
        return $this->hasMany('App\Models\Coment');
    }

    public function replies()
    {
        return $this->hasMany('App\Models\Reply');
    }



    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function orderWithAdmin()
    {
        return $this->orders()->where([
            'admin_id' => Auth::guard('admin')->user()->id,
            'shifted' => 0
        ])
            ->orderBy('created_at', 'DESC');
    }

    public function orderWithOutAdmin()
    {
        return $this->orders()
            ->where('admin_id', '!=', Auth::guard('admin')->user()->id)
            ->where(['shifted' => 0])
            ->orderBy('created_at', 'DESC');
    }
}
