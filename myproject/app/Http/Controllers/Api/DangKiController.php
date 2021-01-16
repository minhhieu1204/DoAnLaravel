<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;


class DangKiController extends Controller
{
    public function index(Request $request) {
        $user = new User();
        $user->username = $request->username;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->ngaysinh = null;
        $user->save();
          echo "success";
    }
}
