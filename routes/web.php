<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tes', function () {
    return view('tes');
});

Route::get('/user/{id}', function ($id) {
    return "profil user dengan id:" . $id;
});

Route::get('/produk/{slug?}', function ($slug = 'semua-produk') {
    return "Menampilkan:" . $slug;
});

Route::get('/gueh}', function ($id) {
    return "Muhammad Raihan:";
});
Route::get('/gueh}', function ($id) {
    return "MuhammadRaihan:";
});

// Route::get('Mahasiswa', [MahasiswaController::class, 'index']);
