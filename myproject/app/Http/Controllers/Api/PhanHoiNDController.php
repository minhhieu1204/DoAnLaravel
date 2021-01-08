<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\NguoiDungPhanHoi;
use App\Http\Controllers\Controller;
class PhanHoiNDController extends Controller
{

    public function index(Request $request)
    {
            $noidung=$request->noidung;
            $id_use=$request->id_user;

            $bailike=new NguoiDungPhanHoi();
            $bailike->user_id=$id_use;
            $bailike->noidung=$noidung;
            $bailike->save();
          echo "success";       
    }

    
}
