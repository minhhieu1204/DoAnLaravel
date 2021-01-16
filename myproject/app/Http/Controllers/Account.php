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
        $array=['arrays'=>User::paginate(4)];
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
        $count=sizeof(User::all());
        if($count%4!=0){
            $count=floor($count/4);
            $count+=1;
        }else{
            $count/=4;
        }
        return redirect('newspaper/account/?page='.$count);
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
        $count=sizeof(User::all());
        if($count%4!=0){
            $count=floor($count/4);
            $count+=1;
        }else{
            $count/=4;
        }
        return redirect('newspaper/account/?page='.$count);
    
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
        $count=sizeof(User::all());
        if($count%4!=0){
            $count=floor($count/4);
            $count+=1;
        }else{
            $count/=4;
        }
        return redirect('newspaper/account/?page='.$count);
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $products = User::where('username','LIKE','%'.$request->search.'%')->get();
            if ($products) {
                foreach ($products as $i) {
                    $output .= '<tr>
                    <td>' . $i['username']. '</td>
                    <td>' . $i['password'] . '</td>
                    <td>' . $i['email']. '</td>
                    <td>' . $i['ngaysinh'] . '</td>
                    </tr>';
                }
            }
            
            return Response($output);
        }
    }
}
