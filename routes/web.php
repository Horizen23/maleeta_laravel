<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
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
Route::get('/',[UserAuth::class,'admin']);

Route::get('/Dashboard', function () {
    return view('adminpage/views/dashboard');
});
Route::get('/intent_Linebot', function () {
    return view('adminpage/views/intentbot');
});

Route::get('/user_information', function () {
    return view('adminpage/views/user_ifm');
});
Route::get('/Employee_information', function () {
    return view('adminpage/views/employee');
});
Route::get('/Message_Linebot', function () {
    return view('adminpage/views/messagebot');
});
Route::get('/Product_car', function () {
    return view('adminpage/views/product');
});

Route::get('/Stock', function () {
    return view('adminpage/views/stock');
});

Route::post('/user',[UserAuth::class,'userlogin']);

Route::get('/login',[UserAuth::class,'clecklogin']);
Route::get('/logut',[UserAuth::class,'userlogut']);
Route::post('/upload',[UserAuth::class,'upload']);

//php artisan optimize