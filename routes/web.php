<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;



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
    return view('inicio');
});


Route::get('/registro', [RegisterController::class,'index']);
Route::post('/registro', [RegisterController::class,'store']);

Route::get('/inicio', [LoginController::class,'index'])->name('login');
Route::post('/inicio', [LoginController::class, 'store']);

Route::post('/salir', [LogoutController::class, 'store'])->name('logout');

Route::get('/muro', [PostController::class, 'index'])->name('post.index');
Route::get('/muro/create',[PostController::class, 'create'])->name('post.create');
Route::post('/posts',[PostController::class, 'store'])->name('posts.store');

Route::post('/imagenes',[ImagenController::class,'store'])->name('imagenes.store');

