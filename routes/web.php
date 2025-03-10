<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[PostController::class,'index'])->name('posts.index');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{id}/edit',[PostController::class,'edit'])->name('posts.edit');
Route::post('/posts/{id}/update',[PostController::class,'update'])->name('posts.update');
Route::delete('/posts/{id}',[PostController::class,'destroy'])->name('posts.delete');
