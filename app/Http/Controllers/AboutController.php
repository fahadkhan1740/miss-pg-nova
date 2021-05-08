<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();

        return view(app()->getLocale().'.about', compact('aboutUs'));
    }
}
