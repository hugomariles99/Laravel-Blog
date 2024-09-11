<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#Testing routes
Route::get('cursos', function () {
    return "Bienvenido a la pagina de cursos";
});
