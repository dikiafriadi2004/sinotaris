<?php

use App\Http\Controllers\PpatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('ppat', PpatController::class);

// Report
Route::get('/add/report/{ppat:slug}', [ReportController::class, 'create'])->name('report.create');
Route::post('/add/report/{ppat:slug}/store', [ReportController::class, 'store'])->name('report.store');
Route::get('/ppat/{ppat:slug}/report/{report}', [ReportController::class, 'edit'])->name('report.edit');
Route::put('/report/{report}/update', [ReportController::class, 'update'])->name('report.update');
Route::delete('/ppat/{ppat:slug}/delete/{report}', [ReportController::class, 'destroy'])->name('report.destroy');

require __DIR__.'/auth.php';
