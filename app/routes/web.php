<?php

use App\Http\Controllers\SampleController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InqueryController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', [SampleController::class, 'index']);

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/message', [MessageController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{name}', [UserController::class, 'show']);

// Route::get('/user/{name}', function($name){
//     return "こんにちは、 {$name}さん";
// });

Route::get('/greet/{name}', [GreetController::class, 'index']);

Route::get('/article', [ArticleController::class, 'index']);
Route::get('/article/{id}', [ArticleController::class, 'show']);

Route::get('/contact',[ContactController::class, 'create']);
Route::post('/contact',[ContactController::class, 'store']);

Route::get('/inquery', [InqueryController::class, 'create'])->name('inqueries.create'); // 'inqueries.create'を叩くと、Route::get('/inquery', [InqueryController::class, 'create'])が実行される
Route::post('/inquery', [InqueryController::class, 'store']);

Route::resource('/tasks', TaskController::class);