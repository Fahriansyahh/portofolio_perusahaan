<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["title" => "Home"]);
});

Route::get('/service', function () {
    return view('service', ["title" => "Service"]);
});
