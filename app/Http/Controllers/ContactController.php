<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::locale(app()->getLocale())->first();

        return view(app()->getLocale(). '.contact')
            ->with('contact', $contact);
    }
}
