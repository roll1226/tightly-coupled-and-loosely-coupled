<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HighCoupling\NotificationController;
use App\Http\Controllers\LowCoupling\NotificationController;

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

Route::get('/send', function () {
    return view('send');
});

Route::get('/send2', function () {
    return view('send2');
});

// Route::post('/high-coupling/send-notification', [NotificationController::class, 'send'])->name('send.high-coupling.notification');

Route::post('/low-coupling/send-notification', [NotificationController::class, 'send'])->name('send.low-coupling.notification');
