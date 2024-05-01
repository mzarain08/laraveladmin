<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::view('/', 'home', ['posts' => array(), 'categories' => array()])->name('home');

Route::get('/home', [\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::view('contact-us', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
//Route::get('posts/{postid}',[\App\Http\Controllers\PostController::class,'show'])->name('post.show');
Route::get('posts/{post}',[\App\Http\Controllers\PostController::class,'show'])->name('post.show');
/*Route::get('/second',function(){
    return view('second');
});*/

Route::view('/second','second');
