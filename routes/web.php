<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

//Aqui no caso nome home
Route::get('/', [HomeController::class,'index'])->name('Home');
Route::get('/post/{post:slug}', [PostController::class,'show'])->name('post');
Route::get('/login', [loginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store'])->name('login');
Route::get('/logout', [LoginController::class,'destroy'])->name('logout');
Route::get('/posts', [PostsController::class,'index'])->name('posts');
