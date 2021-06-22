<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class employee extends Controller
{
    function index(Request $request){

    return $request->input();
    
    }
}
