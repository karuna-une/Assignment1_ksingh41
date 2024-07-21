<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/posts', [PostController::class,'index'])->name('posts.index');
// Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
// Route::get('/posts/show', [PostController::class,'show'])->name('posts.show');


Route::group(['middleware' => ['auth']],function(){
    Route::resource('posts',PostController::class);
    Route::resource('photos',PhotoController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});




Auth::routes();


