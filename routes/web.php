<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/todos', [App\Http\Controllers\TodoController::class, 'index']);
Route::get('/todos/create', [App\Http\Controllers\TodoController::class, 'create'])->middleware('auth');
Route::post('/todos/create', [App\Http\Controllers\TodoController::class, 'store']);
Route::get('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'show']);
Route::get('/todos/{todo}/edit', [App\Http\Controllers\TodoController::class, 'edit']);
Route::post('/todos/{todo}/edit', [App\Http\Controllers\TodoController::class, 'update']);
Route::get('/todos/{todo}/delete', [App\Http\Controllers\TodoController::class, 'delete']);


Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show']);
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'update']);
Route::get('/users/{user}/delete', [App\Http\Controllers\UserController::class, 'delete']);