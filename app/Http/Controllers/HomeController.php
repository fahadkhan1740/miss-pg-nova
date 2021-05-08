<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Home;
use App\Models\HomeBanner;
use App\Models\Membership;
use App\Models\Service;
use App\Models\SocialMediaLink;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $titles = Home::first();

        $homeBanners = HomeBanner::locale(app()->getLocale())->get();

        $aboutUs = AboutUs::locale(app()->getLocale())->first();

        $services = Service::locale(app()->getLocale())->active()->take(6)->get();

        $socialMediaLinks = SocialMediaLink::all();

        $memberships = Membership::take(4)->get();

        return view(app()->getLocale().'.index')
            ->with('titles', $titles)
            ->with('banners', $homeBanners)
            ->with('aboutUs', $aboutUs)
            ->with('services', $services)
            ->with('socialMediaLinks', $socialMediaLinks)
            ->with('memberships', $memberships);
    }
}
