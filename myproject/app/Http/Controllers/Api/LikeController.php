<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Like;
use App\Http\Controllers\Controller;
class LikeController extends Controller
{

  

    public function index(Request $request)
    {
            $id_baiviet=$request->id_baiviet;
            $id_use=$request->id_user;
            $bailike=new Like();
            $bailike->user_id=$id_use;
            $bailike->baiviet_id=$id_baiviet;
            $bailike->save();
          echo "";       
    }

    
}
