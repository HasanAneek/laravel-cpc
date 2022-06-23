<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\UserController;

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
    return view('home');
});

Route::get('/jobs',[PostController::class,'index']);
Route::get('/posts/create',[PostController::class,'create'])->middleware('auth');
Route::post('/posts',[PostController::class,'store'])->middleware('auth');
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->middleware('auth');
Route::put('/posts/{post}',[PostController::class,'update'])->middleware('auth');
Route::delete('/posts/{post}',[PostController::class,'destroy'])->middleware('auth');
Route::get('/posts/manage',[PostController::class,'manage'])->middleware('auth');
Route::get('/posts/{post}',[PostController::class,'show']);

//UserRoute
Route::get('/register',[UserController::class,'create'])->middleware('guest');
Route::post('/users',[UserController::class,'store']);
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate',[UserController::class,'authenticate']);
Route::get('/users/profile',[UserController::class,'profile']);
//Route::put('/users/{user}',[UserController::class,'profileEdit']);
