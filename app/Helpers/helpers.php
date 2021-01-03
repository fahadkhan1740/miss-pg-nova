<?php

use App\Models\Branch;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

function getBranches() {
    return Branch::locale(app()->getLocale())->active()->get();
}

function getLogo() {
    return Setting::first()->logo;
}

function getHomeBackground() {
    return Setting::first()->home_background;
}

function getContactDetails() {
     return Cache::remember('contact_details_'.app()->getLocale(), 3600, function () {
         return Contact::locale(app()->getLocale())->first();
     });
}
