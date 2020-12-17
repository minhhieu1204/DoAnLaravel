<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class Account extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array=['arrays'=>User::all()];
        return view('pages.Accounts.indexAccount',$array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addAccount()
    {
        return view('pages.Accounts.addAccount');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAccount(Request $request)
    {
        $newAccount=new User();
        $newAccount->username=$request->username;
        $newAccount->password=$request->password;
        $newAccount->email=$request->email;
        $newAccount->ngaysinh=$request->Time;
        $newAccount->save();
        $array=['arrays'=>User::all()];
        return view('pages.Accounts.indexAccount',$array);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $array = ['arrays'=>User::where('id',$id)->get()];
       return view('pages.Accounts.edit',$array);
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
        $account= User::find($id);
        $account->username=$request->username;
        $account->password=$request->password;
        $account->email=$request->email;
        $account->ngaysinh=$request->Time;
        $account->save();
        $array=['arrays'=>User::all()];
        return view('pages.Accounts.indexAccount',$array);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new=User::destroy($id);
        $array=['arrays'=>User::all()];
        return view('pages.Accounts.indexAccount',$array);
    }
}
