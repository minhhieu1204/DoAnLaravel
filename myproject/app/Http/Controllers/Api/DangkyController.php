<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
class DangkyController extends Controller
{

    public function index(Request $request)
    {
      $i=0;
      $n=0;
      $ds=User::all();
      foreach($ds as $l){
        if($l['username']==($request->username)){
          $i++;
        }
        if($l['email']==($request->email)){
          $n++;
        }
      }
      if($i==0&&$n==0){
        $newAccount=new User();
        $newAccount->username=$request->username;
        $newAccount->password=$request->password;
        $newAccount->email=$request->email;
        $newAccount->ngaysinh=$request->ngaysinh;
        $newAccount->save();
        echo "success";
      }else{
        if($i!=0){
          echo "IdenticalUser";
        }else{
          echo "IdenticalEmail";
        }
      }
      
    }

    
}
