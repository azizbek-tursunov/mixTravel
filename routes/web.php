<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('lang/change', [PageController::class, 'change'])->name('changeLang');
Route::get('tours', [PageController::class, 'view'])->name('tours');
Route::get('tours/{tour}', [PageController::class, 'show'])->name('show');
Route::get('/about', [PageController::class, 'about'])->name('aboutUs');
Route::get('destinations/{destination}', [PageController::class, 'showByDestination'])->name('showByDestination');
