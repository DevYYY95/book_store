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
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/','AdminController@index')->name('admin.dashboard');
});

Route::get('/detail',function(){
	return view('frontend.detail');
});

Route::get('/category',function(){
	return view('frontend.category');
});

Route::get('/author',function(){
	return view('frontend.author');
});

Route::resource('author','AuthorController');
Route::resource('book','BookController');
Route::resource('category','CategoryController');