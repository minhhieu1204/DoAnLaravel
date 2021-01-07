<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TinNong;
use App\BaiViet;


class NewsHotController extends Controller
{
    //
    
    public function index()
    {
        $list1 =TinNong::all();
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
