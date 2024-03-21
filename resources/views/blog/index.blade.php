@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="text-3xl font-bold text-gray-900 mb-4 text-center py-8">Blog, Berita, dan Artikel</div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
                <a href="{{ route('blog.show', $post->slug) }}" class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}"
                        class="w-full h-48 object-cover hover:scale-105 transition duration-200 hover:cursor-pointer">
                    <div class="p-6">
                        <h1 class="text-xl font-bold text-gray-900 mb-3">{{ $post->title }}</h1>
                        <p class="text-gray-600">{{ $post->created_at->format('d M Y') }}</p>
                        <p class="text-gray-700 mt-3">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="mt-8 space-x-4">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
