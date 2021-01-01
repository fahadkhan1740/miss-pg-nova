<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\HomeBanner;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homeBanners = HomeBanner::all();

        $aboutUs = AboutUs::locale(app()->getLocale())->first();

        $services = Service::locale(app()->getLocale())->active()->take(6)->get();

        return view(app()->getLocale().'.index')
            ->with('banners', $homeBanners)
            ->with('aboutUs', $aboutUs)
            ->with('services', $services);
    }
}
