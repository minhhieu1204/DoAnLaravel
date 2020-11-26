<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    //
    
    public function follow(){
        return $this->belongsTo('App\User','user1_id','id');
    }

    public function duocFollow(){
        return $this->belongsTo('App\User','user2_id','id');
    }
}
