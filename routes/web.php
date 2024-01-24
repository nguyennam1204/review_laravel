<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


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
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'index'])->name('homepage');
Route::get('/all', [UserController::class, 'all'])->name('all');
Route::get('/productdetails/{id}', [UserController::class, 'show'])->name('productdetails');
Route::get('/search', [UserController::class, 'search'])->name('search');
Route::get('/loginuser', [UserController::class, 'login'])->name('loginuser');
Route::get('/registeruser', [UserController::class, 'register'])->name('registeruser');
Route::get('/movies', [AdminController::class, 'index'])->name('movie.index');
Route::get('/movie/create', [AdminController::class, 'create'])->name('movie.create');
Route::get('/movie/store', [AdminController::class, 'store'])->name('movie.store');
Route::get('/movie/{id}/edit', [AdminController::class, 'edit'])->name('movie.edit');
Route::post('/movie/{id}/update', [AdminController::class, 'update'])->name('movie.update');
Route::get('/movie/{id}/destroy', [AdminController::class, 'destroy'])->name('movie.destroy');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
