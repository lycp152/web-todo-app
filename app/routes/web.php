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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ここから追加
Route::resource('todo', 'App\Http\Controllers\TodoController');
Route::put('todo/done/{todo}', [App\Http\Controllers\TodoController::class, 'done'])->name('todo.done');
Route::put('todo/undone/{todo}', [App\Http\Controllers\TodoController::class, 'undone'])->name('todo.undone');
//　ここまで追加
