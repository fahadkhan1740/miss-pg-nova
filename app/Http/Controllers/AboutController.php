<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Contact;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();

        $contact = Contact::first();

        return view(app()->getLocale().'.about', compact('aboutUs', 'contact'));
    }
}
