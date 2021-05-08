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
        $services = KidsService::active()->get();

        $features = KidsFeature::active()->get();

        return view(app()->getLocale().'.kids-club', compact('services', 'features'));
    }
}
