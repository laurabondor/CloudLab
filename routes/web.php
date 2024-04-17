<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TemplateController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::get('/maketest', [TemplateController::class, 'maketest']);
    Route::get('/maketest', [UploadController::class, 'upload']);
    Route::post('/maketest/submit-test', [FormController::class, 'submitTest'])->name('submit.test');
    Route::get('/results', [TemplateController::class, 'results']);
    Route::get('/results', [ResultController::class, 'showResults'])->name('results.show')->middleware('auth');
});

Route::get('/about', [TemplateController::class, 'about']);
Route::get('/contact', [TemplateController::class, 'contact']);

Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';