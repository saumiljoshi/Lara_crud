<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class form extends Controller
{
    function index(Request $Request){
     // echo Storage::disk('local')->put('example.txt', 'Contents');
        // $Request->validate(['name'=>'required','email'=>'required']);
        /*if ($Request->file('uploadfile') == null) {
            $file = "";
        }else{
           $file = $Request->file('uploadfile')->store('media');
           return $file;
        }
        */
    //$Request->file('images')->store('public/images/');
       // echo asset('storage/file.txt');
       /*if($Request->has('uploadfile')){
           //dd($Request->uploadfile);
            $form->addmedia($Request->uploadfile)->tomediacollection();
       }
       return redirect()->back();*/
       
 }
}
