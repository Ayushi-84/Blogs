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

Route::get('/',[LoginController::class,'login']);
Route::post('/',[LoginController::class,'verify']);
Route::get('signup',[RegisterController::class,'create']);
Route::post('signup',[RegisterController::class,'register']);
Route::get('blogs',[BlogsController::class,'blogs']);
Route::post('blogs',[BlogsController::class,'createpost']);
