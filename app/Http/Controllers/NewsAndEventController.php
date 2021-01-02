<?php

namespace App\Http\Controllers;

use App\Models\NewsEvents;
use Illuminate\Http\Request;

class NewsAndEventController extends Controller
{
    public function index()
    {
        $news = NewsEvents::active()->with('user')->latest()->take(6)->get();

        return view(app()->getLocale().'.event-news')
            ->with('news', $news);
    }
}
