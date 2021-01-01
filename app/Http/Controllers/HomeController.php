<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::locale(app()->getLocale())->first();

        return view(app()->getLocale().'.index')
            ->with('aboutUs', $aboutUs);
    }
}
