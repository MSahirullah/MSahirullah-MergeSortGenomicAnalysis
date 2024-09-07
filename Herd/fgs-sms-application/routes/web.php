<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Sms\SmsHistoryController;
use App\Http\Controllers\Sms\SmsSettingsController;
use Illuminate\Support\Facades\Route;

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

    //sms-settings
    Route::get('/sms-settings/', [SmsSettingsController::class, 'index'])->name('sms-settings.index');
    Route::patch('/sms-settings/', [SmsSettingsController::class, 'update'])->name('sms-settings.update');

    //sms-history
    Route::get('/sms-history/', [SmsHistoryController::class, 'index'])->name('sms-history.index');
});

require __DIR__ . '/auth.php';
