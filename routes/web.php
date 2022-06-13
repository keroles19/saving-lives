<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ArticleController;
use App\Http\Controllers\Front\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/articles',[ArticleController::class,'article'])->name('article');
Route::get('/article/{id}',[ArticleController::class,'getArticleById']);
