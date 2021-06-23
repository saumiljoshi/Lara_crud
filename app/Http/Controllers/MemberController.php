<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function add(Request $request)
    {
        $member=new Member;
        $member->id=$request->id;
        $member->name=$request->name;
        $member->email=$request->email;
        $member->address=$request->address;
        $query=$member->save();
        if($query){
            return ["result"=>"has been inserted successfully"];

        }
        else{
            return["result"=>"not submitted"];
        }
    }    
    
}
