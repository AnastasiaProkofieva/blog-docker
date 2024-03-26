<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[PostController::class, 'index'])->name('posts.index');
Route::get('/create',[PostController::class, 'create'])->name('posts.create');
Route::post('/store',[PostController::class, 'store'])->name('posts.store');
Route::get('/{id}',[PostController::class, 'show'])->name('posts.show');
Route::get('/edit/{id}',[PostController::class, 'edit'])->name('posts.edit');
Route::put('/{id}',[PostController::class, 'update'])->name('posts.update');
Route::delete('/{id}',[PostController::class, 'destroy'])->name('posts.destroy');
//Route::get('/post', function () {
//    return view('post');
//});