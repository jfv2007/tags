<?php

use App\Models\Post;
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
Route::get('


/', function () {
    return view('welcome');
});

Route::get('/posts',[App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::post('/posts',[App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
/*
Route::post('users',[App\Http\Controllers\UserController::class,'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

 Route::post('/posts/guardar-post',[\App\Http\Controllers\PostController::class], 'posts-store')->name('posts.store');

 */
