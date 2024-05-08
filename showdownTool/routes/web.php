<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FireTypeController;
use App\Http\Controllers\AssaultRifleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WeaponsController;

Route::get('/',[WeaponsController::class, 'index'])->name('weapons');
Route::get('/gun/{id}',[WeaponsController::class, 'show'])->name('weapon.show');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
