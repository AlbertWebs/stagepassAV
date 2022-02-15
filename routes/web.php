<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact');
Route::get('/our-work', [App\Http\Controllers\HomeController::class, 'our_work'])->name('our-work');
Route::get('/our-work/{slung}', [App\Http\Controllers\HomeController::class, 'work'])->name('work');
Route::get('/av-services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/av-services/{slung}', [App\Http\Controllers\HomeController::class, 'service'])->name('service');
Route::get('/av-services/{slung}/{extra}', [App\Http\Controllers\HomeController::class, 'service_extra'])->name('service');




