<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DangNhapController extends Controller
{
    //
    public function index(Request $request)
    {
        session(['thongbao'=>'1']);
      session(['key'=>'']);
      if(session('username')==null)
         return view('pages.login.index'); 
      else
        return redirect()->route('newspaper.index');
    }

    public function logout()
    {
      session(['key'=>'']);
      session(['username'=>""]);
      return view('pages.login.index'); 
    }

    public function login(Request $request)
    {
      if(session('username')==null)
      {
         $username = $request->username;
         $password = $request->password;
         
         $user =User::where('username','Like',$username)->get();
         //dd($user);
         if(!empty($user[0]->username))
         {
            if($user[0]->password==$password)
            {
                session(['thongbao'=>'1']);
               session(['key'=>'1']);
               session(['username'=>$user[0]->username]);   
               return redirect()->route('newspaper.index');
            }
            else
            {
                session(['thongbao'=>'2']);
                return view('pages.login.index');
            }
         }
         else
         {
            session(['thongbao'=>'2']);
            return view('pages.login.index');
         }
      }
      else{
            return redirect()->route('newspaper.index');
      }
    }
}
