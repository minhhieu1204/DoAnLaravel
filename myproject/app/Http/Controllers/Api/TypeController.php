<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChuyenMuc;

class TypeController extends Controller
{
    public function index()
    {
        return ChuyenMuc::all();
    }
}
