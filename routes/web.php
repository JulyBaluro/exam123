<?php

use App\Http\Controllers\RoomexamController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::inertia('dashboard', 'dashboard')->name('dashboard');
    Route::get('dashboard', [RoomexamController::class, 'index'])->name('dashboard');
    Route::post('dashboard', [RoomexamController::class, 'store'])->name('dashboard.store');
    Route::put('dashboard/{roomexams}', [RoomexamController::class, 'update'])->name('dashboard.update');
    Route::delete('dashboard/{roomexams}', [RoomexamController::class, 'destroy'])->name('dashboard.destroy');
});

require __DIR__ . '/settings.php';
