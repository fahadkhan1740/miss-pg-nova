<?php

namespace App\Http\Controllers;

use App\Models\NewsEvents;
use Illuminate\Http\Request;

class NewsAndEventController extends Controller
{
    public function index()
    {
        $news = NewsEvents::active()->with('user')->latest()->paginate(15);

        return view(app()->getLocale().'.event-news')
            ->with('news', $news);
    }

    public function show($id)
    {
        $news = NewsEvents::active()->where('id', '!=', $id)->with('user')->latest()->take(6)->get();

        $new = NewsEvents::active()->with('user')->find($id);

        return view(app()->getLocale().'.event-news-show')
            ->with('latestNews', $news)
            ->with('new', $new);
    }
}
