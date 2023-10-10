<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CommentsController;
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

Route::get('/signin', [LoginController::class, 'login'])->name('login');
Route::post('/signin', [LoginController::class, 'verify']);
Route::get('/signup', [RegisterController::class, 'create'])->name('register');
Route::post('/signup', [RegisterController::class, 'register']);
Route::get('/', [PostsController::class, 'blogs']);
Route::get('/{username:username}', [PostsController::class, 'myblogs']);
Route::post('/', [PostsController::class, 'createpost']);
Route::get('/{username}/{slug}', [PostsController::class, 'blogsdetailview']);
Route::get('/{username}/edit/{slug}', [PostsController::class, 'edit']);
Route::get('/{username}/delete/{slug}', [PostsController::class, 'delete']);
Route::post('/logout', [SessionsController::class, 'destroy'])->name('logout');
Route::patch('/edit/{id}', [PostsController::class, 'editPost']);
Route::delete('/delete/{id}', [PostsController::class, 'deletePost']);
Route::post('/comment', [CommentsController::class, 'createComment']);
Route::delete('/deleteComment/{id}', [CommentsController::class, 'deleteComment']);
Route::get('/{username}/editComment/{id}', [CommentsController::class, 'edit']);
Route::patch('/editComment/{id}', [CommentsController::class, 'editComment']);
