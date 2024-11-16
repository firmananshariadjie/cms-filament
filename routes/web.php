<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArticleController;

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
//     return view('dashboard.index');
// });
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/service', [DashboardController::class, 'service'])->name('service');
Route::get('/event', [DashboardController::class, 'event'])->name('event');
Route::get('/testimonial', [DashboardController::class, 'testimonial'])->name('testimonial');
Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service-show');
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('article-show');

