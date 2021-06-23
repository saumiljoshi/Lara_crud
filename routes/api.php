<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\BrandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('member',[MemberController::class,'add']);
Route::post('Brand',[BrandController::class,'add']);
Route::get('show/{id?}',[BrandController::class,'show']);
Route::put('update',[BrandController::class,'update']);
Route::delete('delete/{id}',[BrandController::class,'delete']);