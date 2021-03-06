<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'show']);

Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/post', [PostController::class, 'create'])->middleware(['auth'])->name('post');
Route::post('/post', [PostController::class, 'store'])->middleware(['auth']);
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->middleware(['auth']);
Route::put('/post/edit/{id}', [PostController::class, 'update'])->middleware(['auth']);
Route::delete('/post/delete/{id}', [PostController::class, 'destroy'])->middleware(['auth']);

require __DIR__.'/auth.php';
