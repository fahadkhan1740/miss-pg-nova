<?php

namespace App\Http\Controllers;

use App\Models\KidsClub;
use App\Models\KidsFeature;
use App\Models\KidsService;
use Illuminate\Http\Request;

class KidsClubController extends Controller
{
    public function index()
    {
        $kidsClub = KidsClub::locale(app()->getLocale())->first();

        $services = KidsService::locale(app()->getLocale())->active()->get();

        $features = KidsFeature::locale(app()->getLocale())->active()->get();

        return view(app()->getLocale().'.kids-club', compact('kidsClub', 'services', 'features'));
    }
}
