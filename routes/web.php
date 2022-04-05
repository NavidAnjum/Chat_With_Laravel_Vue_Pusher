<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatsController;
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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

//Route::post('/login',);
Route::post('/login',[AuthController::class,'login']);

Route::get('/chat', [ChatsController::class,'index']);
Route::get('/messages', [ChatsController::class,'fetchMessages']);
Route::post('/messages', [ChatsController::class,'sendMessage']);

