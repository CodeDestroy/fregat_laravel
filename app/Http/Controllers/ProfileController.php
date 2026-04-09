<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index(Request $request)
    {
        

        return view('pages.profile.profilePage');

    }

    public function garage(Request $request)
    {
        

        return view('pages.profile.garage');

    }

}