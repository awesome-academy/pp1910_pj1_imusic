<?php

use Illuminate\Support\Facades\Route;

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
    return view('web.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/home', function () {
    return view('web.index');
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/songnew', function () {
    return view('web.songnew.show');
});
route::get('/upload',function (){
    return view('web.upload');
});

route::get('/changepassword',function (){
    return view('auth.changepassword');
});
route::post('/changepassword','Auth\ChangePasswordController@ChangePassword');

Auth::routes();