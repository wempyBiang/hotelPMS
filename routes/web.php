<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\TipeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/booking', [BookingController::class, "showBooking"]);
Route::post('/booking', [BookingController::class, "postBooking"]);


Route::get('/check-in', function () {
    return view('checkin');
});

Route::get('/nota', [NotaController::class, "show"]);
Route::post('/nota', [NotaController::class, "printNota"]);

// admin

Route::get('/admin', function () {
    return view('admin/adminHome');
});

Route::get('/tambahKamar', [KamarController::class, "showTambahKamar"]);
Route::post('/tambahKamar', [KamarController::class, "postKamar"]);

Route::get('/tambahTipe', [TipeController::class, "showTambahTipe"]);
Route::post('/tambahTipe', [TipeController::class, "postTipeKamar"]);

Route::post('/edit-tipe-kamar-{id}', [TipeController::class, "editTipeKamar"]);



