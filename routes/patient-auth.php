<?php

use App\Http\Controllers\Patient\Auth\LoginController;
use App\Http\Controllers\Patient\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::prefix('patient')->middleware('guest:patient')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('patient.register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('patient.login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('patient')->middleware('auth:patient')->group(function () {

    Route::get('/dashboard', function () {
        return view('patient.dashboard');
    })->name('patient.dashboard');

    Route::post('logout', [LoginController::class, 'destroy'])->name('patient.logout');
});

//patient.dashboard