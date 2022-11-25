<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user-table', [
    App\Http\Controllers\UserController::class,
    'userTable'
])->name('users.table');

Route::get('/user-blog', [App\Http\Controllers\UserController::class, 'userBlog'])->name('users.blog');

Route::get('/user-about', [
    App\Http\Controllers\UserController::class,
    'userAbout'
])->name('users.about');
