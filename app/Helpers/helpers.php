<?php

use App\Models\Branch;
use App\Models\Setting;

function getBranches() {
    return Branch::locale(app()->getLocale())->active()->get();
}

function getLogo() {
    return Setting::first()->logo;
}

function getHomeBackground() {
    return Setting::first()->home_background;
}
