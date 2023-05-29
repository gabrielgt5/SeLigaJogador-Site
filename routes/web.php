<?php

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

use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::get('/home', [UserController::class, 'index']);
Route::get('/events/announce', [UserController::class, 'announce'])->middleware('auth');
Route::get('/events/{id}', [UserController::class, 'show']);
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
Route::post('/events', [UserController::class, 'store']);
Route::delete('/events/{id}', [UserController::class, 'destroy']);

Auth::routes();
