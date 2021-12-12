<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestController;

Route::get('/',[TestController::class,'index']);
Route::get('/search',[TestController::class,'search'])->name('search');

Route::get('/post/add',[PostController::class,'create'])->name('post.add');
Route::post('/post/add',[PostController::class,'store'])->name('post.add');
Route::post('/post/add/{id}',[PostController::class,'show'])->name('post.show');

Route::get('/category/add',[CategoryController::class,'create'])->name('category.add');
Route::post('/category/add',[CategoryController::class,'store'])->name('category.add');
Route::post('/category/add/{id}',[CategoryController::class,'show'])->name('category.show');


