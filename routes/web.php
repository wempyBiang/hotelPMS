<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeContoller;
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

Route::get('/', [HomeContoller::class, "show"]);


Route::get('/booking', [BookingController::class, "showBooking"]);
Route::post('/booking', [BookingController::class, "postBooking"]);


Route::get('/check-in', function () {
    return view('checkin');
});

Route::get('/nota', [NotaController::class, "show"]);
Route::get('/nota2', [NotaController::class, "show2"]);
Route::get('/nota3', [NotaController::class, "show3"]);
Route::post('/nota', [NotaController::class, "printNota"]);
Route::post('/nota2', [NotaController::class, "printNota2"]);
Route::post('/nota3', [NotaController::class, "printNota3"]);

// admin

Route::get('/admin', function () {
    return view('admin/adminHome');
});

Route::get('/tambahKamar', [KamarController::class, "showTambahKamar"]);
Route::post('/tambahKamar', [KamarController::class, "postKamar"]);

Route::get('/tambahTipe', [TipeController::class, "showTambahTipe"]);
Route::post('/tambahTipe', [TipeController::class, "postTipeKamar"]);

Route::post('/edit-tipe-kamar-{id}', [TipeController::class, "editTipeKamar"]);



