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

Route::get('/',[\App\Http\Controllers\Front\HomeController::class,'index'])->name('home');
Route::get('/about',[\App\Http\Controllers\Front\AboutController::class,'about'])->name('about');
Route::get('/article',[\App\Http\Controllers\Front\ArticleController::class,'article'])->name('article');
Route::get('/article/{id}',[\App\Http\Controllers\Front\ArticleController::class,'getArticleById']);
Route::post('/obligation',[\App\Http\Controllers\Front\ObligationController::class,'store'])->name('obligation');

//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/hospital.php';
