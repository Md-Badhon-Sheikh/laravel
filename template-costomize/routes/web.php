<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('Master');
});

Route::get('/add-user', function () {
    return view('pages.user.add_user');
});
