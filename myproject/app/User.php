<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function dsLike()
    {
        return $this->hasMany('App\Like', 'user_id', 'id');
    }
    public function dsBaoCaoBaiViet()
    {
        return $this->hasMany('App\BaoCaoBaiViet', 'user_id', 'id');
    }

    // public function dsFollow()
    // {
    //     return $this->hasMany('App\Follow', 'user1_id', 'id');
    // }

    // public function dsDuocFollow()
    // {
    //     return $this->hasMany('App\Follow', 'user2_id', 'id');
    // }

    public function dsNguoiDungPhanHoi()
    {
        return $this->hasMany('App\NguoiDungPhanHoi', 'user_id', 'id');
    }

    public function dsYeuThichBaiViet()
    {
        return $this->hasMany('App\YeuThichBaiViet', 'user_id', 'id');
    }

    public function dsBinhLuan()
    {
        return $this->hasMany('App\BinhLuan', 'user_id', 'id');
    }
}
