<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MyController;
use Illuminate\Http\Request;

class Mycontroller extends Controller
{
   function index($id){
    echo "hey,it's me!!";
    echo "<pre>";
    echo $id;
    /*return view('views.index',array('userid'=>$id));*/
   }
}
