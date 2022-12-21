<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $saluto = "Buongiorno";
    $utente = "Karim";
    $stampa_paragrafo = false;
    $colori = ['giallo', 'rosso', 'verde'];
    return view('home', compact('saluto', 'utente', 'stampa_paragrafo', 'colori'));

    return view('home');
});
