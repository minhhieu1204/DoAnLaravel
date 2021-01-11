<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BinhLuan;

class BinhLuanController extends Controller
{
    //
    public function getBinhLuan(Request $request)
    {
        $list = BinhLuan::where('baiviet_id','=',$request->id)->get();
        $a=[];
        foreach($list as $i)
        {
            $b=["username"=>$i->user->username,"noidungbinhluan"=>$i['noidungbinhluan']];
            array_push($a,$b);
        }
        return response()->json(['data'=> $a]);
    }

    public function postBinhLuan(Request $request)
    {
        $cmt = new BinhLuan();
        $cmt->noidungbinhluan=$request->noidungbinhluan;
        $cmt->user_id=$request->id_user;
        $cmt->baiviet_id=$request->id_baiviet;
        $cmt->save();

        echo "success";
    }
}
