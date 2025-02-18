<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::with(['categories', 'products'])->get();
        return $admins;

        // return view('pages.relation.hasManyThroughExam', compact('admins'));
    }
}
