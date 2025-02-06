<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use App\Models\SubUser;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $users = SubUser::all();
        // dd($users);
        return view('pages.user.all_user', compact('users'));
    }
}