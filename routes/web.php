<?php

use Illuminate\Support\Facades\Mail;
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

/** */
Route::post('contact',function(){
    $data = request(['name', 'email', 'phone', 'message']);
    Mail::to('haifaelabed29@gmail.com')
    ->send(new \App\Mail\ContactMail($data));
    return redirect('contact')->with('flash', 'Votre demande a été envoyer avec succée');
});

Route::get('forum',function(){
    if ( auth()->check()){
        return redirect('home');
    }else{
    return view("forum");
    }
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

//Route::get('/coments/create', 'ComentController@create');
Route::resource('coments', 'ComentController');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
