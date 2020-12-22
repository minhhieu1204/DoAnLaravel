<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiDungPhanHoi;

class Replys extends Controller
{
    public function replyApp()
    {
        $array = ["arrays"=>NguoiDungPhanHoi::all()];
        return view('pages.Replys.replyApp',$array);
    }
    
}
