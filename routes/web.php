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
    return view("accueil");
});
Route::get('contact',function(){
    return view("contact");
});
Route::get('forum',function(){
    return view("forum");
});
Route::get('inscription',function(){
    return view('inscription');
});
Route::get('services',function(){
    return view('/#.$service');
});
Route::get('portfolio',function(){
    return view('/#.$portfolio');
});
Route::get('connexion',function(){
    return view('connexion');
});

Route::resource('Users', 'UserController');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
