<?php

use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('customer')->group(function() { // ROUTES GROUP FOR CUSTOMERS
    // LOGIN ROUTE FOR CUSTOMERS
    Route::get('/login', [CustomerContoller::class, 'login_form']);
    Route::post('/login', [CustomerContoller::class, 'login']);
    // REGISTER ROUTES FOR CUSTOMERS
    Route::get('/register', [CustomerContoller::class, 'register_form']);
    Route::post('/register', [CustomerContoller::class, 'register']);

});

Route::prefix('restaurant')->group(function() { // ROUTES GROUP FOR RESTAURANTS
    // LOGIN ROUTE FOR RESTAURANTS
    Route::get('/login', [RestaurantContoller::class, 'login_form']);
    Route::post('/login', [RestaurantContoller::class, 'login']);
    // REGISTER ROUTES FOR RESTAURANTS
    Route::get('/register', [RestaurantContoller::class, 'register_form']);
    Route::post('/register', [RestaurantContoller::class, 'register']);
});
require __DIR__.'/auth.php';
