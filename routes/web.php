<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;


Route::get('/',[BlogController::class,'index'] );

Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);

Route::get('/register',[AuthController::class,'create'] )->middleware('guest');
Route::post('/register',[AuthController::class,'store'] )->middleware('guest');

Route::post('/logout',[AuthController::class,'logout'] )->middleware('auth');

Route::get('/login',[AuthController::class,'login'] )->middleware('guest');
Route::post('/login',[AuthController::class,'post_login'] )->middleware('guest');

//BlogController
//all -> index -> blogs.index
//single -> show -> blogs.show 
//form -> create -> blogs.create
//server store -> store -> -
//edit form -> edit -> blogs.edit
//sever updatw -> update -> -
//server delete -> destory-> -