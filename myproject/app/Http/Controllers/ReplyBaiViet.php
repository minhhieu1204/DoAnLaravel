<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BaoCaoBaiViet;

class ReplyBaiViet extends Controller
{
    public function index()
    {
        $array = ["arrays"=>BaoCaoBaiViet::all()];
        return view('pages.Replys.indexReply',$array);
    }
    public function destroy($id)
    {
        $new=BaoCaoBaiViet::destroy($id);
        $array=["arrays"=>BaoCaoBaiViet::all()];
        return view('pages.Replys.replyApp',$array);
    }
}
