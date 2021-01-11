<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguoiDungPhanHoi extends Model
{
    protected $table = "nguoi_dung_phan_hois";
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
