<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BaiViet;

class BaivietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array = ["arrays"=>BaiViet::all()];
    
        return view('pages.Home.index',$array);
    }
    public function NewsHot()
    {
        $array = ["arrays"=>BaiViet::all()];
        return view('pages.Home.NewsHot',$array);
    }
    public function NewsArticle()
    {
        $array = ["arrays"=>BaiViet::all()];
        
        return view('pages.Home.NewsArticle',$array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $news=new BaiViet();
       $news->tieude = $request->title;
       $news->mota=$request->description;
       $news->noidung=$request->content;
       $news->hinhanh="hinh4.jpg";
       $news->thoigian=date("Y/m/d");
       $news->chuyenmuc_id = $request->category;
       $news->save();
       $array = ["arrays"=>BaiViet::all()];
       return view('pages.Home.index',$array);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $array = ["arrays"=>BaiViet::where('id',$id)->get()];
        return view('pages.Home.detail',$array);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // date_default_timezone_set('Asia/Ho_Chi_Minh');
        // $day=date('l');
        // $time=date('d/m/Y H:i:s');
        // $daytime=$day." ".$time;
        $array = ["arrays"=>BaiViet::where('id',$id)->get()];
         return view('pages.Home.edit',$array);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name =  $request->name;
        var_dump($name);
        $news=BaiViet::find($id);
        
        $news->name = $request->name;
        $news->save();
     // $news->update(['name'=>$request->name]);
      $array = ["arrays"=>BaiViet::all()];
      return view('pages.Home.index',$array);
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $news=BaiViet::find($id);
        $news->delete();
        $array = ["arrays"=>BaiViet::all()];
        return view('pages.Home.index',$array);
    }
}
