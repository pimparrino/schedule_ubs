<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UbsController;
use App\Http\Controllers\Auth\RegisteredUserController;
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
});

Route::get('/schedule', [ScheduleController::class, 'index'])->middleware(['auth'])->name('schedule.index');
Route::get('/schedule/create', [ScheduleController::class, 'create'])->middleware(['auth'])->name('schedule.create');
Route::post('/schedule/store', [ScheduleController::class, 'store'])->middleware(['auth'])->name('schedule.store');

Route::get('/schedule/{id}', [ScheduleController::class, 'edit'])->middleware(['auth'])->can('isAttendant')->name('schedule.edit');
Route::put('/schedule/update/{id}', [ScheduleController::class, 'update'])->middleware(['auth'])->can('isAttendant')->name('schedule.update');
Route::get('/schedule/pending', [ScheduleController::class, 'pending'])->middleware(['auth'])->can('isAttendant')->name('schedule.pending');


Route::get('/ubs', [UbsController::class, 'index'])->middleware(['auth'])->name('ubs.index');
Route::get('/ubs/create', [UbsController::class, 'create'])->middleware(['auth'])->name('ubs.create');
Route::post('/ubs/store', [UbsController::class, 'store'])->middleware(['auth'])->name('ubs.store');

Route::get('/doctor', [DoctorController::class, 'index'])->middleware(['auth'])->can('isAttendant')->name('doctor.index');
Route::get('/doctor/create', [DoctorController::class, 'create'])->middleware(['auth'])->can('isAttendant')->name('doctor.create');
Route::post('/doctor/store', [DoctorController::class, 'store'])->middleware(['auth'])->name('doctor.store');

/*
Route::middleware(['auth'])->group(function () {
    Route::get('/attendant/requests', [AppointmentController::class, 'pendingRequests'])->name('attendant.requests');
});
*/

//Route::post('/appointments/{id}/approve', [AppointmentController::class, 'approveRequest'])->name('appointments.approve');

Route::get('/register', [RegisteredUserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'register']);

/*
Route::middleware('auth')->group(function () {
    Route::post('/appointments/{id}/approve', [AppointmentController::class, 'approveAppointment'])->name('appointments.approve');

});
*/


require __DIR__.'/auth.php';

