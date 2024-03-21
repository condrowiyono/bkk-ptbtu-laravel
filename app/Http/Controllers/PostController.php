<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Traits\Upload;


class PostController extends Controller
{
    use Upload;

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|unique:posts|min:5|max:100',
            'content' => 'required|string|min:5|max:2000',
            'category' => 'required|string|min:3|max:30',
        ]);

        // Get image file
        if ($request->hasFile('image')) {
            $path = $this->UploadFile($request->file('image'), 'post');
            $validated['image_path'] = $path;
        }

        // Create slug from title
        $validated['slug'] = Str::slug($validated['title'], '-');

        $post = Post::create($validated);
        return redirect()->route('posts.index')->with('notification', 'Berhasil menambahkan post');
    }


    public function show(string $id)
    {
        $post = Post::find($id);
        if (!$post) {
            abort(404);
        }
        return view('posts.edit', compact('post'));
    }

    public function edit(string $id)
    {
        $post = Post::find($id);
        if (!$post) {
            abort(404);
        }
        return view('posts.edit', compact('post'));
    }


    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('notification', 'Berhasil');
    }


    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index')->with('notification', 'Berhasil');
    }
}
