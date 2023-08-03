<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TodoController;
use App\Http\Controllers\CompleteTodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "auth" middleware group. Now create something great!
|
 */

Route::group(['middleware' => 'verified'], function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::put('todos/{todo}/complete', CompleteTodoController::class)->name('todos.complete');
    Route::resource('todos', TodoController::class);
});
