<?php

namespace App\Http\Controllers;

use App\Models\NewsEvents;
use Illuminate\Http\Request;

class NewsAndEventController extends Controller
{
    public function index()
    {
        $news = NewsEvents::locale(app()->getLocale())->active()->with('user')->latest()->take(6)->get();

        return view(app()->getLocale().'.event-news')
            ->with('news', $news);
    }

    public function show($id)
    {
        $news = NewsEvents::locale(app()->getLocale())->active()->with('user')->latest()->take(6)->get();

        $new = NewsEvents::locale(app()->getLocale())->active()->with('user')->find($id);

        return view(app()->getLocale().'.event-news-show')
            ->with('latestNews', $news)
            ->with('new', $new);
    }
}
