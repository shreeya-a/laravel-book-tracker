<?php

use App\Http\Controllers\BooklistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);
Route::get('/login',[HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/add-book',[HomeController::class, 'addBook'])->name('add-book');


Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');
Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class,'logout'])->name('logout');


Route::post('/save-book', [BooklistController::class,'saveBook'])->name('saveBook');
Route::get('/delete/{id}', [BooklistController::class,'deleteBook'])->name('deleteBook');
Route::get('/edit/{id}', [BooklistController::class,'editBook'])->name('editBook');
Route::post('/update-book', [BooklistController::class,'updateBook'])->name('updateBook');



