<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TorentjesController;

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

Route::get('/', [TorentjesController::class, 'index'])->name('torentjes.index');
Route::get('/kamers', [TorentjesController::class, 'kamers'])->name('torentjes.kamers');
Route::get('/voorzieningen', [TorentjesController::class, 'voorzieningen'])->name('torentjes.voorzieningen');
Route::get('/contact', [TorentjesController::class, 'contact'])->name('torentjes.contact');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
