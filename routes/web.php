<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/intereses', function () {
    return view('intereses');
});

Route::get('/habilidades', function () {
    return view('habilidades');
});

Route::get('/metas', function () {
    return view('metas');
});
