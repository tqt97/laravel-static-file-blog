<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/tags/{tag}', [TagController::class,'show'])->name('tags.show');
