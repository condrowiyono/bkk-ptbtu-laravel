<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{



  public function index()
  {
    $posts = Post::orderBy('created_at', 'desc')->paginate(10);
    return view('blog.index', compact('posts'));
  }

  public function show($slug)
  {
    $post = Post::where('slug', $slug)->first();
    if (!$post) {
      abort(404);
    }
    return view('blog.view', compact('post'));
  }

}
