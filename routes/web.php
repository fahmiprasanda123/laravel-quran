<?php

use App\Http\Controllers\ListSurahController;
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
    return view('welcome');
});

Route::get('/surah', [ListSurahController::class, 'getSurah']);
Route::get('/surah/{surahNumber}/quran-uthmani', [ListSurahController::class, 'getSurahQuranUthmani']);
