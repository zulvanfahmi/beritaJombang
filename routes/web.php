<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('home', [
//         "pageTitle" => "Berita Jombang"
//     ]);
// });


Route::get('/', [NewsController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/{news:slug}', [NewsController::class, 'show']);

// Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
// Route::get('/authors/{author:username}', [AuthorController::class, 'show']);
