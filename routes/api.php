<?php

use App\Http\Controllers\KorisnikController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('korisnici')->group(function () {
    Route::get('/', [KorisnikController::class, 'dohvatiKorisnike']);
    Route::get('/preuzmi_datoteku/{ime_datoteke}', [KorisnikController::class, 'preuzmi_datoteku']);
    Route::get('/preuzmiDatotekuKorisnika/{id}', [KorisnikController::class, 'preuzmiDatotekuKorisnika']);
    Route::post('/dodaj', [KorisnikController::class, 'dodajKorisnika']);
    Route::post('/uredi', [KorisnikController::class, 'urediKorisnika']);
    Route::get('/izbrisi/{id}', [KorisnikController::class, 'izbrisiKorisnika']);
});
