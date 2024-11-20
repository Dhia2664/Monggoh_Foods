<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('home');
});

Route::get('/menu', function () {
    return view ('menu');
});
