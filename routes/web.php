<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Student
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'student'])->name('dashboard');

//Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified','admin'])->name('admin.dashboard');

//Registrar
Route::get('/registrar/dashboard', function () {
    return view('registrar.dashboard');
})->middleware(['auth', 'verified', 'registrar'])->name('registrar.dashboard');

//Department
Route::get('/department/dashboard', function () {
    return view('department.dashboard');
})->middleware(['auth', 'verified', 'department'])->name('department.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
