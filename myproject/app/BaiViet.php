<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    //
    public function dsDuocYeuThichBaiViet()
    {
        return $this->hasMany('App\YeuThichBaiViet', 'baiviet_id', 'id');
    }

    public function dsDuocLike()
    {
        return $this->hasMany('App\Like', 'baiviet_id', 'id');
    }

    public function dsDuocBinhLuan()
    {
        return $this->hasMany('App\BinhLuan', 'baiviet_id', 'id');
    }

    public function dsBiBaoCaoBaiViet()
    {
        return $this->hasMany('App\BaoCaoBaiViet', 'baiviet_id', 'id');
    }

    public function chuyenMuc()
    {
        return $this->belongsTo('App\ChuyenMuc','chuyenmuc_id','id');
    }
}
