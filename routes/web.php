<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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

Route::get('/signin', [LoginController::class, 'login']);
Route::post('/signin', [LoginController::class, 'verify']);
Route::get('/signup', [RegisterController::class, 'create']);
Route::post('/signup', [RegisterController::class, 'register']);
Route::get('/', [BlogsController::class, 'blogs']);
Route::get('/{username}', [BlogsController::class, 'myblogs']);
Route::post('/', [BlogsController::class, 'createpost']);
Route::get('/{username}/{slug}', [BlogsController::class, 'blogsdetailview']);
Route::get('/{slug}', [BlogsController::class, 'blogsdetail']);
Route::post('/logout', [SessionsController::class, 'destroy']);
