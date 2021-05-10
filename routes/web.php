<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/absence', [App\Http\Controllers\AbsenceController::class, 'index'])->name('absence');

Route::get('/absence', [App\Http\Controllers\AbsenceController::class, 'create'])->name('absence');

Route::get('/absence', [App\Http\Controllers\AbsenceController::class, 'edit'])->name('absence');

Auth::routes();

Route::get('/conge', [App\Http\Controllers\CongeController::class, 'index'])->name('conge');

Route::get('/conge', [App\Http\Controllers\CongeController::class, 'create'])->name('conge');

Route::get('/conge', [App\Http\Controllers\CongeController::class, 'edit'])->name('conge');

Auth::routes();

Route::get('/employe', [App\Http\Controllers\EmployeController::class, 'index'])->name('employe');

Route::get('/employe', [App\Http\Controllers\EmployeController::class, 'create'])->name('employe');

Route::get('/employe', [App\Http\Controllers\EmployeController::class, 'edit'])->name('employe');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
