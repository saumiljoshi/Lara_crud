<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;


class DB_test extends Controller
{
    function select(){
        $result= DB::table('product_details')->select(array('id','name'))->get();
        echo "<pre>";
        print_r($result);
    }
    function insert(){
        DB::table
        ('product_details')->insert(array('id'=>'66','name'=>'hijack','category'=>'redmi','brand'=>'mobile','price'=>'4500','display_price'=>'5000','description'=>'becouse we are here!!!'));
    }
    function update(){
        DB::table('product_details')->where('id',66)->update(array('name'=>'xyz','description'=>'hey,ought to sorted?'));
    }
    function delete(){
        DB::table('product_details')->where('id',66)->delete();
    }
}
?>

