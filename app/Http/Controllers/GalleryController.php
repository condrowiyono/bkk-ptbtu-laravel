<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Traits\Upload;

class GalleryController extends Controller
{
    use Upload;

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(10);
        return view('galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('galleries.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get image file
        if ($request->hasFile('photo')) {
            $path = $this->UploadFile($request->file('photo'), 'gallery');
            Gallery::create([
                'name' => $request->name,
                'path' => $path
            ]);

            return redirect()->route('galleries.index')->with('success', 'File Uploaded Successfully');
        }

        return redirect()->route('galleries.index')->with('error', 'File Upload Failed');
    }

    public function destroy(string $id)
    {
        $gallery = Gallery::find($id);

        // Delete the file
        if ($gallery) {
            Gallery::destroy($id);
            $this->DeleteFile($gallery->path);
        }

        return redirect()->route('galleries.index')->with('success', 'Berhasil');
    }
}
