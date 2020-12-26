<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BaiViet;

class NewsController extends Controller
{
    public function index()
    {
        $list = BaiViet::limit(2)->get();
        return reponse()->json(['data' => $list]);
    }
}
