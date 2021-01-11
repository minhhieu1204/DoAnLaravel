<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinNong extends Model
{
    
    public function tenBaiViet()
    {
        return $this->belongsTo('App\BaiViet','baiviet_id','id');
    }
}
