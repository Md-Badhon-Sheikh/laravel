<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MechanicController;
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

Route::get('/hasManyThrough', function () {
    return view('pages.relation.hasManyThrough');
});

Route::get('/hasManyThroughExam', function () {
    return view('pages.relation.hasManyThroughExam');
});
// Route::get('/dbrelation', function () {
//     return view('pages.relation.dbRelation');
// });


Route:: get('/dbrelation',[EmployeeController::class, 'index'])->name('dbrelation');

Route:: get('/hasManyThrough',[CountryController::class, 'index']);

Route:: get('/all-user',[StudentController::class, 'index'])->name('all-user');

Route:: get('/manage-user',[MechanicController::class, 'index']);

Route:: get('/hasManyThroughExam',[AdminController::class, 'index']);