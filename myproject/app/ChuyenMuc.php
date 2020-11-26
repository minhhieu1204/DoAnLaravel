<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuyenMuc extends Model
{
    //
    public function dsVideo()
    {
        return $this->hasMany('App\Video', 'chuyenmuc_id', 'id');
    }

    // public function dsBaiViet()
    // {
    //     return $this->hasMany('App\BaiViet', 'chuyenmuc_id', 'id');
    // }
}
