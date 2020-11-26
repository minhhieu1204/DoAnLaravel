<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChuyenMuc;
class Catagorys extends Controller
{
    public function index()
    {

        $categorys = ['dscategory'=> ChuyenMuc::all()];
        return view('pages.Categorys.index',$categorys);
    }
    public function create()
    {
        return view('pages.Categorys.create');
    }
    public function store(Request $request)
    {
        $chuyenmuc = new ChuyenMuc();
        $chuyenmuc->tenchuyenmuc = $request->title;
        $chuyenmuc->save();
        $categorys = ['dscategory'=> ChuyenMuc::all()];
        return view('pages.Categorys.index',$categorys);
    }

    public function update(Request $request,$id)
    {
        $categorys = ['category'=> ChuyenMuc::find($id)];
        return view('pages.Categorys.update',$categorys );
    }

    public function edit(Request $request)
    {
        $chuyenmuc = ChuyenMuc::find($request->id);
        $chuyenmuc->tenchuyenmuc = $request->title;
        $chuyenmuc->save();
        $categorys = ['dscategory'=> ChuyenMuc::all()];
        return view('pages.Categorys.index',$categorys);
    }
    public function delete(Request $request)
    {
        ChuyenMuc::destroy($request->id);
        $categorys = ['dscategory'=> ChuyenMuc::all()];
        return view('pages.Categorys.index',$categorys);
    }
}
