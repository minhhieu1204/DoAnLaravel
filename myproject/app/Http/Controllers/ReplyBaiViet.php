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
        return view('pages.Replys.indexReply',$array);
    }
    public function search(Request $request)
    {
        $search_text = $_GET['query'];
        $array = ["arrays"=>BaoCaoBaiViet::where('noidung','LIKE','%'.$search_text.'%')
                                    ->paginate(1)];
        return view('pages.Replys.indexReply',$array);
    }
}
