<?php

namespace App\Http\Controllers;

use App\Models\PersonalTraining;
use App\Models\Trainer;
use Illuminate\Http\Request;

class PersonalTrainingController extends Controller
{
    public function index()
    {
        $personalTraining = PersonalTraining::locale(app()->getLocale())->first();

        $trainers = Trainer::all();

        return view(app()->getLocale().'.personal-training', compact('trainers', 'personalTraining'));
    }
}
