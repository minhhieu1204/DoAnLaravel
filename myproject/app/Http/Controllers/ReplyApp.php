<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiDungPhanHoi;

class ReplyApp extends Controller
{
    public function index()
    {
        $array = ["arrays"=>NguoiDungPhanHoi::paginate(4)];
        return view('pages.Replys.replyApp',$array);
    }
    public function destroy($id)
    {
        $new=NguoiDungPhanHoi::destroy($id);
        $array=["arrays"=>NguoiDungPhanHoi::paginate(4)];
        return view('pages.Replys.replyApp',$array);
    }
}
