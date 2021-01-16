<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChuyenMuc;
class Catagorys extends Controller
{
    public function index()
    {

        $categorys = ['dscategory'=> ChuyenMuc::paginate(4)];
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
        $count = sizeof(ChuyenMuc::all());
        if($count%4!=0){
            $count = floor($count/4);
            $count+=1;
        }else {
            $count /= 4;
        }
        return redirect('/newspaper/category?page='.$count);
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
        $count = sizeof(ChuyenMuc::all());
        if($count%4!=0){
            $count = floor($count/4);
            $count+=1;
        }else {
            $count /= 4;
        }
        return redirect('/newspaper/category?page='.$count);
    }
    public function delete(Request $request)
    {
        ChuyenMuc::destroy($request->id);

        $count = sizeof(ChuyenMuc::all());

        if($count%4!=0){
            $count = floor($count/4);
            $count+=1;
        }else {
            $count /= 4;
        }
        return redirect('/newspaper/category?page='.$count);
    }
    public function search()
    {
        $search_text = $_GET['query'];
        $dsTheLoai = ["dscategory"=>ChuyenMuc::where('tenchuyenmuc','LIKE','%'.$search_text.'%')
                       ->paginate(2) ];
        return view('pages.Categorys.index',$dsTheLoai);
    }
}
