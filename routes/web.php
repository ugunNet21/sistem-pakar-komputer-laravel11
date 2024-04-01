<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backend\GejalaController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::get('/logouts', [LoginController::class, 'logout'])->name('logouts');

    // Routes for GejalaController
    Route::get('/gejala', [GejalaController::class, 'index'])->name('gejala.index');
    Route::get('/gejala/create', [GejalaController::class, 'create'])->name('gejala.create');
    Route::post('/gejala', [GejalaController::class, 'store'])->name('gejala.store');
    Route::get('/gejala/{gejala}', [GejalaController::class, 'show'])->name('gejala.show');
    Route::get('/gejala/{gejala}/edit', [GejalaController::class, 'edit'])->name('gejala.edit');
    Route::put('/gejala/{gejala}', [GejalaController::class, 'update'])->name('gejala.update');
    Route::delete('/gejala/{gejala}', [GejalaController::class, 'destroy'])->name('gejala.destroy');

});
