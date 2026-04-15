<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::resource('/siswas', SiswaController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/LandingPage', function () {
    return view('Landing_Page/index');
});
// Route::get('/siswa', function () {
//     return view('siswas.index');
// });