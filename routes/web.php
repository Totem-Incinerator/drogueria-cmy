<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.inicio');
})->name('inicio');

Route::get('/nuestras-sedes-cauca', function () {
    return view('public.sedes');
})->name('sedes.ubicacion');

Route::get('/pqrs', function () {
    return view('public.pqrs');
})->name('pqrs.index');

Route::get('/nosotros', function () {
    return view('public.nosotros');
})->name('nosotros');

// Route::get('/login', function (){
//     return view('public.login');
// })->name("login");