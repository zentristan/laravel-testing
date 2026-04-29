<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\talentaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/PasarJasa', [talentaController::class, 'index'])->name('PasarJasa.index');

Route::get('/LandingPage', function () {
    return view('Landing_Page/index');
})->name('landingPage');

Route::get('/Login', function () {
    return view('Register_Page/login');
})-> name('login');

Route::get('/Register', function () {
    return view('Register_Page/register');
})-> name('register');

Route::get('/LowonganJasa/{id}', [KlienJobsController::class, 'show'])->name('LowonganJasa.show');

Route::get('/TambahLowongan', [KlienJobsController::class, 'create',])->name('Lowongan.create');

Route::post('/TambahLowongan', [KlienJobsController::class, 'store',])->name('Lowongan.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/PasarJasa/{id}', [talentaController::class, 'show'])->name('PasarJasa.show');
    
    

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/PasarJasa/{id}', [talentaController::class, 'show'])->name('PasarJasa.show');
    
    

});

require __DIR__.'/auth.php';
