<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BinhLuan;

class Comment extends Controller
{
    public function index()
    {
        $array = ["arrays"=>[BinhLuan::all()]];
        return view('pages.Comment.index',$array);
    }
}
