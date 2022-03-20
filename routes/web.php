<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\FaqController;

use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts/', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/edit', [PostController::class, 'edit']);

Route::get('posts/delete', [PostController::class, 'delete']);

Route::get('/products/', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create']);

Route::get('/products/edit', [ProductController::class, 'edit']);

Route::get('/products/delete', [ProductController::class, 'delete']);

Route::get('/faq/', [FaqController::class, 'index']);

Route::get('/faq/create', [FaqController::class, 'create']);

Route::get('/faq/edit', [FaqController::class, 'edit']);

Route::get('/faq/delete', [FaqController::class, 'delete']);

Route::get('/users/', [UserController::class, 'index']);

Route::get('/users/create', [UserController::class, 'create']);

Route::get('/users/edit', [UserController::class, 'edit']);

Route::get('/users/delete', [UserController::class, 'delete']);

Route::get('/about_us', [HomeController::class, 'aboutUs']);