<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteConfig;

class SiteConfigController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $site = SiteConfig::latest()->first();
        return view('site.index',compact('site'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $site = SiteConfig::latest()->first();
        return view('site.edit',compact('site'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $site = SiteConfig::latest()->first();
        $site->update($request->all());
        return redirect()->route('site.index')->with('success','Site updated successfully');
    }
}
