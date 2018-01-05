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
//Route::resource('/','tweetController');

Route::resource('tweet','tweetController');
Route::resource('profile','tweetController');

/*Route::get('tweet',function(){
	return view('tweet');
})->middleware('test');*/

Route::has('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');