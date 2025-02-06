<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('master');
});

Route::get('/add-user', function () {
    return view('pages.user.add_user');
});

Route::get('/manage-user', function () {
    return view('pages.user.manage_user');
});

Route::get('/all-user', function () {
    return view('pages.user.all_user');
});

Route:: get('/all-user',[StudentController::class, 'index'])->name('all-user');