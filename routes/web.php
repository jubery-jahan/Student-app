<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/details/{id}', [HomeController::class, 'details'])->name('details');
Route::post('/make-full-name', [HomeController::class, 'makeFullName'])->name('make-full-name');
Route::post('/creat-series', [HomeController::class, 'creatSeries'])->name('creat-series');
Route::get('/password-generator', [HomeController::class, 'passwordGenerator'])->name('password-generator');
Route::post('/make-password', [HomeController::class, 'makePassword'])->name('make-password');
Route::get('/student-info', [HomeController::class, 'studentInfo'])->name('student-info');
Route::post('/return-info', [HomeController::class, 'returnInfo'])->name('return-info');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/add-product', [ProductController::class, 'index'])->name('add-product');
    Route::post('/create-product', [ProductController::class, 'create'])->name('create-product');
    Route::get('/manage-product', [ProductController::class, 'manage'])->name('manage-product');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit-product');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('update-product');
    Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete-product');


});
