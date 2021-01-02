<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function show($id)
    {
        $branch = Branch::locale(app()->getLocale())->find($id);

        return view(app()->getLocale().'.branch-show')
            ->with('branch', $branch);
    }
}
