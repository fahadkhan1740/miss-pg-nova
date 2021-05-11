<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::locale(app()->getLocale())->first();

        return view(app()->getLocale(). '.contact')
            ->with('contact', $contact);
    }

    /**
     * @throws ValidationException
     */
    public function store(): RedirectResponse
    {
        $this->validate(request(), [
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|email|min:2|max:100',
            'mobile' => 'required|string|min:8|max:15',
            'message' => 'required|string|min:8|max:500',
        ]);

        $contact = new ContactForm();
        $contact->name = request()->input('name');
        $contact->email = request()->input('email');
        $contact->mobile = request()->input('mobile');
        $contact->message = request()->input('message');
        $contact->save();

        return back()->with('success', __('custom.contact_us.success_message'));
    }
}
