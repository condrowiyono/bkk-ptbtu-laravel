@extends('layouts.app')

@section('heads')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="text-3xl font-bold text-gray-900 mb-4">{{ __('Tambah Pos baru') }}</div>

        <form method="POST" action="{{ route('posts.store') }}" class="space-y-8" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Gambar Utama</label>
                <input type="file" name="image" id="image" class="w-full" accept="image/*">
            </div>
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" name="title" id="title"
                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" required>
            </div>
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="category" id="category"
                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" required>
                    <option value="news">Berita</option>
                    <option value="article">Artikel</option>
                    <option value="press_release">Press Release</option>
                </select>
            </div>
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Konten</label>
                <div id="content_quill" style="height: 200px"></div>
                <textarea name="content" id="content" hidden class="hidden" required></textarea>
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
