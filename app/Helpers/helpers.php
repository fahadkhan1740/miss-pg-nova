<?php

use App\Models\Branch;

function getBranches() {
    return Branch::locale(app()->getLocale())->active()->get();
}
