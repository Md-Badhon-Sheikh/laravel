<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        // Fetch all countries with their related posts
        $countries = Country::with('posts')->get();

        return view('pages.relation.hasManyThrough', compact('countries'));
    }
}
