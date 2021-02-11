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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'UserController@welcome')->name('home');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','checkrole:admin']], function(){
    // Route::get('/', 'AdminController@userdata')->name('home');
    // Route::get('/adminhomepage', 'AdminController@welcome')->name('adminpage');
    Route::get('/userdata', 'AdminController@userdata')->name('userdata');
    Route::get('/deleteuser/{id}', 'AdminController@removeuser');

});

Route::group(['middleware' => ['auth','checkrole:user']], function(){
    // Route::get('/', 'UserController@home')->name('home');
    Route::get('/home', 'UserController@home')->name('home');
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/myblog', 'UserController@myblog')->name('myblog');
    Route::post('/update','UserController@update');
    Route::get('/detail/{id}','UserController@detail');
    Route::get('/category/{id}','UserController@category');
    Route::get('/delete/{id}','UserController@removeitem');
    Route::get('/addblog', 'UserController@gotostore');
    Route::post('/addblog', 'UserController@store');
    Route::get('/delete/{id}', 'UserController@removeitem');


});
