<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\YeuThichBaiViet;
use App\BaiViet;
use App\Http\Controllers\Controller;
class BaivietYeuThichController extends Controller
{

  

    public function index(Request $request)
    {
            $baiviet=new YeuThichBaiViet();
            $baiviet->baiviet_id=$request->id_baiviet;
            $baiviet->user_id=$request->id_user;
            $baiviet->save();
          echo "successFavorite";   
    }

    public function getAll(){
      $list1 =YeuThichBaiViet::all();
      $list2 = BaiViet::all();

      $b=[];
      $ds =[];
      foreach ($list1 as $i)
      {
          array_push($b,$i['baiviet_id']);
      }
      
      foreach ($list2 as $baiviet)
      {
          if(in_array( $baiviet['id'],$b ))
              array_push($ds,$baiviet);
      }

      
      return response()->json(['data'=> $ds]);
    }
}
