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

Route::get('/send-for-high-coupling', function () {
    return view('send-for-high-coupling');
});

Route::get('/send-for-low-coupling', function () {
    return view('send-for-low-coupling');
});

Route::post('/high-coupling/send-notification', [HighCouplingNotificationController::class, 'send'])->name('send.high-coupling.notification');

Route::post('/low-coupling/send-notification', [LowCouplingNotificationController::class, 'send'])->name('send.low-coupling.notification');
