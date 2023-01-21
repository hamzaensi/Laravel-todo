<?php

use App\Http\Controllers\TaskController;
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

Route::get('tasks', [TaskController::class,'index']);
Route::post('tasks', [TaskController::class,'store'])->name('store');
Route::get('tasks/{task}',[TaskController::class,'show'])->name('task');
Route::get('task/new',[TaskController::class,'edit']);
