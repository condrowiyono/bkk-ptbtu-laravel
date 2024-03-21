@extends('layouts.app')
@section('heads')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="text-3xl font-bold text-gray-900 mb-4">{{ __('Update Post') }}</div>

        <form method="POST" action="{{ route('posts.update', $post->id) }}" class="space-y-8">
            @method('PUT')
            @csrf
            <div>
                <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}"
                    class="w-64 h-48 object-cover rounded">
                <a href="{{ asset('storage/' . $post->image_path) }}" class="text-sm text-blue-500" target="_blank">Buka
                    Gambar</a>
            </div>
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Ganti Gambar Utama</label>
                <input type="file" name="image" id="image" class="w-full" accept="image/*">
            </div>

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" name="title" id="title" value="{{ $post->title }}"
                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" required>
            </div>
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="category" id="category"
                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" required>
                    <option value="news" {{ $post->category === 'news' ? 'selected' : '' }}>Berita</option>
                    <option value="article" {{ $post->category === 'article' ? 'selected' : '' }}>Artikel</option>
                    <option value="press_release" {{ $post->category === 'press_release' ? 'selected' : '' }}>Press
                        Release</option>
                </select>
            </div>
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Konten</label>
                <div id="content_quill" style="height: 200px">{!! $post->content !!}</div>
                <textarea name="content" id="content" hidden class="hidden" required>{{ $post->content }}</textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-primary text-white px-4 py-2 rounded hover:bg-primary/90 transition duration-200">{{ __('Simpan') }}</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>
    <script>
        const content = new Quill("#content_quill", {
            theme: "snow"
        });

        const contentInput = document.querySelector("#content");

        content.on("text-change", function() {
            contentInput.value = content.root.innerHTML;
        });
    </script>
@endsection
