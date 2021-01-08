<?php

namespace App\Http\Controllers;

use App\Models\PersonalTraining;
use Illuminate\Http\Request;

class PersonalTrainingController extends Controller
{
    public function index()
    {
        $personalTraining = PersonalTraining::locale(app()->getLocale())->first();

        return view(app()->getLocale().'.personal-training')
            ->with('personalTraining', $personalTraining);
    }
}
