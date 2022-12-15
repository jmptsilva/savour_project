<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/restaurant/dashboard', function () {
    return view('restaurant.dashboard');
})->middleware(['auth:restaurant', 'verified'])->name('restaurant.dashboard');

require __DIR__.'/restaurantauth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth:restaurant')->prefix('restaurant')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// API ROUTES FOR OFFERS

Route::get('/api/offers/name={name}', [OfferController::class, 'offer_name']);
Route::get('/api/offers/restaurant_id={id}', [OfferController::class, 'all_from_restaurant']);
Route::get('/api/offers/active', [OfferController::class, 'all_active']);
Route::get('/api/offers/active/restaurant_id={id}', [OfferController::class, 'all_active_from_restaurant']);
Route::get('/api/offers/inactive/restaurant_id={id}', [OfferController::class, 'all_inactive_from_restaurant']);
Route::get('/api/offers/last', [OfferController::class, 'last_added_offers']);




