<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World' ;
});

Route::get('/world', function () {
    return 'World' ;
});

// Route::get('/', function () {
//     return 'Selamat Datang' ;
// });

// Route::get('/about', function () {
//     return '2341720066 <br> Febrian Arka Samudra' ;
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/article/{id}', function
($articleId) {
 return 'Halaman Artikel dengan ID '.$articleId;
});

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });

Route::get('/user/profile', function() {
    //
   })->name('profile');


Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);
   

Route::get('/greeting', [WelcomeController::class,'greeting']);
