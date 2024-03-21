@extends('layouts.blog')

@section('content')
    <div class="container">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $post->title }}</h1>
        <p class="text-gray-600">{{ $post->created_at->format('d M Y') }}</p>

        <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}"
            class="w-full h-72 object-cover mt-4 mb-8 rounded md:h-80 lg:h-96">

        <article class="leading-relaxed tracking-wide text-gray-700 text-lg">{!! $post->content !!}</article>
        <div class="mt-8 space-x-4">
            <a href="{{ route('blog.index') }}"
                class="bg-primary text-white px-4 py-2 rounded hover:bg-primary/90 transition duration-200">{{ __('Kembali') }}</a>
        </div>
    </div>
@endsection
