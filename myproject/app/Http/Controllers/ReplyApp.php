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
    public function search()
    {
        $search_text = $_GET['query'];
        $array = ["arrays"=>PhanHoiNguoiDung::where('noidung','LIKE','%'.$search_text.'%')
                                    ->paginate(2)];
        return view('pages.Replys.replyApp',$array);
    }
}
