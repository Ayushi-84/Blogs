<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/signin',[LoginController::class,'login']);
Route::post('/signin',[LoginController::class,'verify']);
Route::get('signup',[RegisterController::class,'create']);
Route::post('signup',[RegisterController::class,'register']);
Route::get('/',[BlogsController::class,'blogs']);
Route::post('/',[BlogsController::class,'createpost']);
Route::get('details',[BlogsController::class,'blogsdetailview']);
