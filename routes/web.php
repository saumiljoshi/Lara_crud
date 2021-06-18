<?php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\form;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\User;
use App\Http\Controllers\DB_test;
use  App\Http\Controllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test/{id}', function ($id) {
    echo $id;
    return view('first');
});
/*Route::get('user_home','user@index');
Route::view('test','first');
Route::get('/user', [user::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'index']);*/
Route::get('/user/{id}' , [Mycontroller::class , 'index']);
Route::get('index/{id}',function ($id){
        echo $id;
        return view('index');
});
/*Route::group(['middleware'=>['Usercheck']],function(){
    Route::view('news1','news1');  
    Route::view('my_form','form');
});*/
route::view('page','page');
route::view('form','form');
//Route::get('/form' , [form::class , 'index']);
Route::view('web','web',array('section'=>array('name'=>'saumil','age'=>28)));
//Route::view('news1','news1')->middleware('Usercheck');
Route::view('news1','news1');
Route::view('global','global');
Route::get('/select', [DB_test::class,'select']);
Route::get('/insert', [DB_test::class,'insert']);
Route::get('/update',[DB_test::class,'update']);
Route::get('/delete',[DB_test::class,'delete']);
Route::get('/show',[ImageController::class,'getdata']);
Route::view('add','form');
Route::get('/add',[Usercontroller::class,'getdata']);
Route::resource('CustomerResources',CustomerController::class);