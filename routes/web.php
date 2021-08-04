<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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
Route::get('login', [AuthController::class, 'showFormLogin'])->name('auth.showFormLogin');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::middleware('auth')->prefix('book')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('book.index');
    Route::post('/store', [BookController::class, 'store'])->name('book.store');
    Route::get('/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::post('/{id}/update', [BookController::class, 'update'])->name('book.update');
    Route::get('/{id}/delete', [BookController::class, 'destroy'])->name('book.destroy');
});
Route::middleware('auth')->prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/{id}/showDetail', [CategoryController::class, 'show'])->name('category.show');
});
