<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteConfig;
use App\Models\Activities;
use App\Models\Gallery;


class WelcomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $site = SiteConfig::latest()->first();
        $activities = Activities::orderBy('created_at', 'desc')->get();
        $galleries = Gallery::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('site', 'activities', 'galleries'));
    }
}
