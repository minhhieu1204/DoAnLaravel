<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BaiViet;
use App\TinNong;
use Illuminate\Support\Facades\File; 

class BaivietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = TinNong::all();
        $b=[];
        foreach ($a as $i)
        {
            array_push($b,$i['baiviet_id']);
        }
        // ->paginate(2)
        $array = ["arrays"=>BaiViet::where('daxoa','=',0)->paginate(2),"tinnong"=>$b,"search"=>""];
        
        return view('pages.Home.index',$array);
    }

    public function NewsHot()
    {
        // $array = ["arrays"=>TinNong::all()];
        $array = ["arrays"=>TinNong::paginate(2)];

        return view('pages.Home.NewsHot',$array);
    }
    public function NewsArticle()
    {
         // $array = ["arrays"=>TinNong::all()];
        $array = ["arrays"=>BaiViet::paginate(2)];
        
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
        $file_name="";
        $messages = [
            'image' => 'Định dạng không cho phép',
            'max' => 'Kích thước file quá lớn',
        ];
        $this->validate($request, [
		    'file' => 'image|max:2028',
		], $messages);
        // Kiểm tra file hợp lệ
        if ($request->file->isValid()){
            // Lấy tên file
            $file_name = $request->file->getClientOriginalName();
            // Lưu file vào thư mục upload với tên là biến $filenamexx1     
            $request->file->move('img/upload',$file_name);
        }
       // var_dump($file_name);
       $news=new BaiViet();
       $news->tieude = $request->title;
       $news->mota=$request->description;
       $news->noidung=$request->content;
       $news->hinhanh=$file_name;
       $news->thoigian=date("Y/m/d");
       $news->chuyenmuc_id = $request->category;
       $news->save();
       
       $count = sizeof(BaiViet::where('daxoa','=',0)->get());

       if($count%2!=0){
           $count = floor($count/2);
           $count+=1;
       }else {
           $count /= 2;
       }
       return redirect('/?page='.$count);
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


    public function addnewshot($id)
    {
        $tintuc = new TinNong();
        $tintuc->baiviet_id = $id;
        $tintuc->save();

        return redirect()->route('newspaper.index');
    }

    public function deletenewshot($id)
    {
        $tintuc =TinNong::destroy($id);
        
        $count = sizeof(TinNong::all());

        if($count%2!=0){
            $count = floor($count/2);
            $count+=1;
        }else {
            $count /= 2;
        }
        return redirect('/newspaper/newsHot?page='.$count);
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
        $array = ["baiviet"=>BaiViet::find($id)];
        
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
        
        $file_name=$request->file_old;
        $messages = [
            'image' => 'Định dạng không cho phép',
            'max' => 'Kích thước file quá lớn',
        ];
        $this->validate($request, [
		    'file' => 'image|max:2028',
		], $messages);
        // Kiểm tra file hợp lệ
        if ($request->file!=null && $request->file->isValid()){
            File::delete('img/upload/'.$request->file_old);
            // Lấy tên file
            $file_name = $request->file->getClientOriginalName();
            // Lưu file vào thư mục upload với tên là biến $filenamexx1     
            $request->file->move('img/upload',$file_name);
        }
        $news=BaiViet::find($id);
        $news->tieude = $request->title;
        $news->mota=$request->description;
        $news->noidung=$request->content;
        if($file_name!=null)
        {
            $news->hinhanh=$file_name;
        }
        $news->thoigian=date("Y/m/d");
        $news->chuyenmuc_id = $request->category;
        $news->save();
        $count = sizeof(BaiViet::where('daxoa','=',0)->get());

        if($count%2!=0){
            $count = floor($count/2);
            $count+=1;
        }else {
            $count /= 2;
        }
        return redirect('/?page='.$count);
  
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
        $news->daxoa=1;
        $news->save();
        
        $count = sizeof(BaiViet::where('daxoa','=',0)->get());

        if($count%2!=0){
            $count = floor($count/2);
            $count+=1;
        }else {
            $count /= 2;
        }
        return redirect('/?page='.$count);
    }

    public function search()
    {
        $a = TinNong::all();
        $b=[];
        foreach ($a as $i)
        {
            array_push($b,$i['baiviet_id']);
        }
        $search_text = $_GET['query'];
        $array = ["arrays"=>BaiViet::where('tieude','LIKE','%'.$search_text.'%')->paginate(2),"tinnong"=>$b,"search"=>$search_text];
        return view('pages.Home.index',$array);
    }
}
