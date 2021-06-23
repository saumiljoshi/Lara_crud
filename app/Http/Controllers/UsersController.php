<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index(){

        $users = User::all();
         return view('view',['users'=>$users]);
    }
    public function add(Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->age=$request->age;
        $user->password=$request->password;
        $query=$user->save();
        
        if($query){
            return back()->with("success","inserted successfully");
        }else{
            return back()->with("fail","not inserted");
        }
    }
    
}
