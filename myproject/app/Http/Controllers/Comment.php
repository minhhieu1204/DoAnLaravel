<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BinhLuan;

class Comment extends Controller
{
    public function index()
    {
        $cmt = ['dscmt'=>BinhLuan::all()];
        // dd(BinhLuan::all()->toArray());
         return view('pages.Comment.index',$cmt);

    }
    public function edit(Request $request,$id)
    {
        $cmt = ['cmtt'=> BinhLuan::find($id)];
        return view('pages.Comment.update',$cmt );
    }
    public function update(Request $request,$id)
    {
        $cmt = BinhLuan::find($id);
        $cmt->noidungbinhluan = $request->noidungbinhluan;
        $cmt->save();
        $dscmt = ['dscmt'=> BinhLuan::all()];
        return view('pages.Comment.index',$dscmt);
    }
    public function delete(Request $request)
    {
        BinhLuan::destroy($request->id);
        $dscmt = ['dscmt'=> BinhLuan::all()];
        return view('pages.Comment.index',$dscmt);
    }
}
