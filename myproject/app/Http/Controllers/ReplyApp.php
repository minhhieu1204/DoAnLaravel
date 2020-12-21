<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiDungPhanHoi;

class ReplyApp extends Controller
{
    public function index()
    {
        $array = ["arrays"=>NguoiDungPhanHoi::all()];
        return view('pages.Replys.replyApp',$array);
    }
    public function destroy($id)
    {
        $new=PhanHoiNguoiDung::destroy($id);
        $array=["arrays"=>PhanHoiNguoiDung::all()];
        return view('pages.Replys.replyApp',$array);
    }
}
