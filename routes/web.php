<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
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
// Admin: List users
Route::get('/admin/users', [AdminController::class, 'users'])->middleware(['auth', 'verified', 'admin'])->name('admin.users');


// //Registrar
// Route::get('/registrar/dashboard', function () {
//     return view('registrar.dashboard');
// })->middleware(['auth', 'verified', 'registrar'])->name('registrar.dashboard');
// Registrar Routes
Route::middleware(['auth', 'verified', 'registrar'])->prefix('registrar')->name('registrar.')->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('registrar.dashboard');
    })->name('dashboard');

    // Courses route
    Route::get('/courses', function () {
        return view('registrar.courses');
    })->name('courses');

    // Students route
    Route::get('/students', function () {
        return view('registrar.students');
    })->name('students');

});

// Department Routes
Route::middleware(['auth', 'verified', 'department'])->prefix('department')->name('department.')->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('department.dashboard');
    })->name('dashboard');

    // Instructors route
    Route::get('/instructors', function () {
        return view('department.instructors');
    })->name('instructors');

    // Courses route
    Route::get('/courses', function () {
        return view('department.courses');
    })->name('courses');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
