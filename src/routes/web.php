<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HighCoupling\HighCouplingNotificationController;
use App\Http\Controllers\LowCoupling\LowCouplingNotificationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('high-coupling')
    ->name('high-coupling.')
    ->controller(HighCouplingNotificationController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/send', 'send')->name('send');
    });

Route::prefix('low-coupling')
    ->name('low-coupling.')
    ->controller(LowCouplingNotificationController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/send', 'send')->name('send');
    });
