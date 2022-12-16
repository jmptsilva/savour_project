<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\OrderController;
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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/restaurant/dashboard', function () {
    return view('restaurant.dashboard');
})->middleware(['auth:restaurant', 'verified'])->name('restaurant.dashboard');

require __DIR__ . '/restaurantauth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__ . '/adminauth.php';

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
Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// API routes

Route::get('/api/restaurants/all', [RestaurantController::class, 'all_restaurants']);
Route::get('/api/restaurants/id={id}', [RestaurantController::class, 'find_by_id']);
Route::get('/api/restaurants/name={name}', [RestaurantController::class, 'find_by_name']);
Route::get('/api/restaurants/restaurant_location={location}', [RestaurantController::class, 'find_by_location']);

Route::get('/api/offers/name={name}', [OfferController::class, 'offer_name']);
Route::get('/api/offers/restaurant_id={id}', [OfferController::class, 'all_from_restaurant']);
Route::get('/api/offers/active', [OfferController::class, 'all_active']);
Route::get('/api/offers/active/restaurant_id={id}', [OfferController::class, 'all_active_from_restaurant']);
Route::get('/api/offers/inactive/restaurant_id={id}', [OfferController::class, 'all_inactive_from_restaurant']);
Route::get('/api/offers/last', [OfferController::class, 'last_added_offers']);


Route::get('/api/restaurant/orders/restaurant_id={id}', [OrderController::class, 'order_history_by_restaurant']);
