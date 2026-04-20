<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::resource('/siswas', SiswaController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/LowonganJasa', function () {
    return view('Lowongan_Jasa.lowonganjasa');
});

Route::get('/PasarJasa', function () {
    return view('Pasar_Jasa.pasarjasa');
});

Route::get('/Sidebar', function () {
    return view('components.sidebar');
});

Route::get('/Navbarno', function () {
    return view('components.navbar_templateno');
});

Route::get('/Navbar', function () {
    return view('components.navbar_template');
});

Route::get('/Dashboard', function () {
    return view('Dashboard_Siswa.dashboard_siswa');
});

Route::get('/Lamaran', function () {
    return view('Lamaran_Siswa.lamaran_siswa');
});