<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminBlogController;
use Illuminate\Support\Facades\Auth;

Route::get('/',[BlogController::class,'index']);

Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);
Route::post('/blogs/{blog:slug}/comments',[CommentController::class,'store']);



Route::get('/register',[AuthController::class,'create'])->middleware('guest');
Route::post('/register',[AuthController::class,'store'])->middleware('guest');
Route::post('/logout',[AuthController::class,'logout']);
Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'post_login'])->middleware('guest');
Route::post('/blogs/{blog:slug}/subscription',[BlogController::class,'subscriptionHandler']);

Route::get('/admin/blogs/create',[AdminBlogController::class,'create'])->middleware('admin');
Route::post('/admin/blogs/store',[AdminBlogController::class,'store'])->middleware('admin');

Route::get('/admin/blogs',[AdminBlogController::class,'index'])->middleware('admin');
Route::delete('/admin/blogs/{blog:slug}/delete',[AdminBlogController::class,'destroy'])->middleware('admin');
Route::get('/admin/blogs/{blog:slug}/edit',[AdminBlogController::class,'edit'])->middleware('admin');
Route::patch('/admin/blogs/{blog:slug}/update',[AdminBlogController::class,'update'])->middleware('admin');
Route::get('/user/{{auth():user():id}}/photo',[AdminBlogController::class,'update'])->middleware('admin');