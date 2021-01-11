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
      $dem=0;
            $list1 =YeuThichBaiViet::all();
            $baiviet=new YeuThichBaiViet();
            foreach($list1 as $list){
              if(($list['baiviet_id']==$request->id_baiviet)&&($list['user_id']==$request->id_user)){
                $dem++;
              }
            }
            if($dem==0){
              $baiviet->baiviet_id=$request->id_baiviet;
              $baiviet->user_id=$request->id_user;
              $baiviet->save();
            echo "successFavorite";   
            }
            else {
              echo "Identical";  
            }
    }

    public function getAll(Request $request){
      $list1 =YeuThichBaiViet::all();
      $list2 = BaiViet::all();
      $idUser=$request->id_user;

      $b=[];
      $ds =[];
      foreach ($list1 as $i)
      {
        if($idUser==$i['user_id']){
          array_push($b,$i['baiviet_id']);
        }
      }
      
      foreach ($list2 as $baiviet)
      {
          if(in_array( $baiviet['id'],$b ))
              array_push($ds,$baiviet);
      }
      return response()->json(['data'=> $ds]);
    }
}
