<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Admin-Panel For admin
Route::group(['middleware'=>['auth','role:admin'] ,'prefix'=>'admin'],function()
{
Route::get('/panel-admin', 'AdminController@index')->name('admin/panel-admin');


Route::get('/product', 'ProductController@index')->name('admin/product');


Route::get('/category', 'CategoryController@index')->name('admin/category');


});


