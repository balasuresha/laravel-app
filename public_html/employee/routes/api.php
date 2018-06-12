<?php

use Illuminate\Http\Request;
use App\Employee;
use App\Admin;

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

//Route::get('fetchAdmin/{id}',function($id){
//    return Admin::with('Employee')->where('id',$id)->get();
//});

Route::post('fetchAdmin','AdminController@show');
