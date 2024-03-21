<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activities;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $activities = Activities::orderBy('created_at', 'desc')->paginate(10);
        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        return view('activities.create');
    }


    public function store(Request $request)
    {
        $activity = Activities::create($request->all());
        return redirect()->route('activities.index')->with('success', 'Berhasil');
    }


    public function show(string $id)
    {
        $activity = Activities::find($id);
        if (!$activity) {
            abort(404);
        }
        return view('activities.edit', compact('activity'));
    }

    public function edit(string $id)
    {
        $activity = Activities::find($id);
        if (!$activity) {
            abort(404);
        }
        return view('activities.edit', compact('activity'));
    }


    public function update(Request $request, string $id)
    {
        $activity = Activities::find($id);
        $activity->update($request->all());
        return redirect()->route('activities.index')->with('success', 'Berhasil');
    }


    public function destroy(string $id)
    {
        $activity = Activities::find($id);
        $activity->delete();
        return redirect()->route('activities.index')->with('success', 'Berhasil');
    }
}
