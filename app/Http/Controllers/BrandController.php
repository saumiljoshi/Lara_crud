<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;

class BrandController extends Controller
{
    function add(Request $req){
        
       
        $general= new General();
        $general->name=$req->name;
        $general->brand_name=$req->brand_name;
        $general->address=$req->address;
        $general->price=$req->price;
        $query=$general->save();
        if($query){
            return ["result"=>"committed"];
        }else
        {
            return["result"=>"not committed"];
        }
        
    
    }
    function show($id=null){
        return $id?General::find($id):General::all();
        
        
    }
    function update(Request $request){
       $general= General::find($request->id);
       $general->name=$request->name;
       $general->brand_name=$request->brand_name;
       $general->address=$request->address;
       $query=$general->save();
    if($query){
        return ["result"=>"updated"];

    }else{
        return["result"=>"not updated"];
    }
           
    }
    function delete($id)
      {
          $general=General::find($id);
          $query=$general->delete();

          
          if($query)
          {
            return["record"=>"record has been deleted"];
          }else{
              return["record"=>"not deleted"];
          }           
      }
}
