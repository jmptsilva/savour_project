<?php

use App\Http\Controllers\Restaurantauth\AuthenticatedSessionController;
use App\Http\Controllers\Restaurantauth\ConfirmablePasswordController;
use App\Http\Controllers\Restaurantauth\EmailVerificationNotificationController;
use App\Http\Controllers\Restaurantauth\EmailVerificationPromptController;
use App\Http\Controllers\Restaurantauth\NewPasswordController;
use App\Http\Controllers\Restaurantauth\PasswordController;
use App\Http\Controllers\Restaurantauth\PasswordResetLinkController;
use App\Http\Controllers\Restaurantauth\RegisteredUserController;
use App\Http\Controllers\Restaurantauth\VerifyEmailController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest:restaurant')->prefix('restaurant')->as('restaurant.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::group(['middleware' => ['auth:restaurant'], 'prefix' => 'restaurant', 'as' => 'restaurant.'], function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::get('update', [RestaurantController::class, 'edit'])->name('update');
    Route::put('update', [RestaurantController::class, 'update']);

    Route::get('dashboard/offers/create', [OfferController::class, 'edit'])->name('offer-create');
    Route::put('dashboard/offers', [OfferController::class, 'update']);

    Route::get('dashboard/offers/update', [OfferController::class, 'edit'])->name('offer-update');
    Route::put('dashboard/offers/update', [OfferController::class, 'update']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // These need to be filled with the proper controller

    Route::get('chart', function () {
        return view('restaurant/chart');
    })->name('chart');

    Route::get('restaurantprofile', function () {
        return view('restaurant/restaurantProfile');
    })->name('profile');

    Route::get('order', function () {
        return view('restaurant/order');
    })->name('order');

    Route::get('custom', function () {
        return view('restaurant/custom');
    })->name('custom');

    Route::get('/restaurant/custommenu', function () {
        return view('restaurant/custommenu');
    })->name('custommenu');

    Route::get('addmenu', function () {
        return view('restaurant/addmenu');
    })->name('addmenu');




    /* Route::get('/restaurant/profile', function () {
        return view('profile/edit');
    })->name('profile'); */
});
