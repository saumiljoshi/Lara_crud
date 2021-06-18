<?php

use App\Http\Controllers\UserController;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index($id){
        echo "hey,first controller";
    }
}
