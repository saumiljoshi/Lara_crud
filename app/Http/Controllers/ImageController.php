<?php

namespace App\Http\Controllers;
use App\Http\Controllers\User;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;


use App\Models\Product_detail;


class ImageController extends Controller
{
    function getdata(){
      return Product_detail::all();
    }
}
