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
    return view('welcome');
});
Route::get('/admin/login','Admin\LoginController@login');
Route::get('/admin/register','Admin\LoginController@register');
Route::get('/admin/adminreg','Admin\LoginController@adminreg');
Route::get('/admin/ajaxlogin','Admin\LoginController@ajaxlogin');
Route::get('/admin/list','Admin\LoginController@list');
Route::get('/h5/logins','H5\LoginController@logins');
Route::get('/admin/logins','Admin\LoginController@logins');