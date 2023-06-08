<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TourController;
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
Route::get('/about', [PageController::class, 'about'])->name('aboutUs');

Route::get('lang/change', LanguageController::class)->name('changeLang');

Route::get('tours', [TourController::class, 'index'])->name('tours');
Route::get('tours/{tour}', [TourController::class, 'show'])->name('showTour');

Route::get('destinations/{destination}', [DestinationController::class, 'showByDestination'])->name('showByDestination');

Route::get('hotels', [HotelController::class, 'index'])->name('hotels');
Route::get('hotels/{hotel}', [HotelController::class, 'show'])->name('showHotel');
