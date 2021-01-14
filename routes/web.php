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

Route::prefix('admin')->middleware('auth')->group(function(){

    Route::view('/dashboard','admin.dashboard')->name('dashboard');

    Route::resource('category','CategoryController');

    Route::get("profile","ProfileController@index")->name('profile');
    Route::post("profileUpdateInfo","ProfileController@updateInfo")->name("profile.info.update");
    Route::post("profileUpdatePhoto","ProfileController@updatePhoto")->name("profile.photo.update");
    Route::post("profileUpdatePassword","ProfileController@updatePassword")->name("profile.password.update");

});

