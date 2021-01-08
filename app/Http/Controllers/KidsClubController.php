<?php

namespace App\Http\Controllers;

use App\Models\KidsClub;
use Illuminate\Http\Request;

class KidsClubController extends Controller
{
    public function index()
    {
        $kidsClub = KidsClub::locale(app()->getLocale())->first();

        return view(app()->getLocale().'.kids-club')
            ->with('kidsClub', $kidsClub);
    }
}
