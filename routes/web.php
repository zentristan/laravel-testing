<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::resource('/siswas', SiswaController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/LowonganJasa', function () {
    return view('Lowongan_Jasa/lowonganjasa');
});

// Route::get('/Footer', function () {
//     return view('components.footer');
// });

// Route::get('/Navbar', function () {
//     return view('components.navbar');
// });


// Route::get('/siswa', function () {
//     return view('siswas.index');
// });