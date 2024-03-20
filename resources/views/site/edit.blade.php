@extends('layouts.app')

@section('heads')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="text-3xl font-bold text-gray-900 mb-4">{{ __('Konfigurasi Situs Utama') }}</div>

        <form method="POST" action="{{ route('site.update') }}" class="space-y-8">
            @csrf
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-900 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-1/4"> {{ __('Item') }}</th>
                            <th scope="col" class="px-6 py-3"> {{ __('Value / Nilai') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td scope="row" class="px-6 py-4"> {{ __('Judul Hero') }}</td>
                            <td class="px-6 py-4">
                                <input type="text" name="hero_title" id="hero_title" value="{{ $site->hero_title }}"
                                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                                    required>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td scope="row" class="px-6 py-4"> {{ __('Subjudul Hero') }}</td>
                            <td class="px-6 py-4">
                                <input type="text" name="hero_subtitle" id="hero_subtitle"
                                    value="{{ $site->hero_subtitle }}"
                                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                                    required>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td scope="row" class="px-6 py-4"> {{ __('Judul Profile') }}</td>
                            <td class="px-6 py-4">
                                <input type="text" name="about_title" id="about_title" value="{{ $site->about_title }}"
                                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                                    required>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td scope="row" class="px-6 py-4"> {{ __('Deskripsi Profil') }}</td>
                            <td class="px-6 py-4">
                                <div id="about_description">
                                    {!! htmlspecialchars_decode($site->about_description) !!}
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td scope="row" class="px-6 py-4"> {{ __('Alamat Lengkap') }}</td>
                            <td class="px-6 py-4">
                                <div id="address_full">
                                    {!! htmlspecialchars_decode($site->address_full) !!}
                                </div>
                            </td>
                        </tr>

                        <tr class="bg-white border-b">
                            <td scope="row" rowspan="2" class="px-6 py-4"> {{ __('Facebook') }}</td>
                            <td class="px-6 py-4">
                                <input type="text" name="social_facebook" id="social_facebook"
                                    value="{{ $site->social_facebook }}"
                                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                                    required>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                <input name="social_facebook_link" id="social_facebook_link" type="url"
                                    value="{{ $site->social_facebook_link }}"
                                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                                    required>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td scope="row" rowspan="2" class="px-6 py-4"> {{ __('Instagram') }}</td>
                            <td class="px-6 py-4">
                                <input type="text" name="social_instagram" id="social_instagram"
                                    value="{{ $site->social_instagram }}"
                                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                                    required>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                <input name="social_instagram_link" id="social_instagram_link" type="url"
                                    value="{{ $site->social_instagram_link }}"
                                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                                    required>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td scope="row" rowspan="2" class="px-6 py-4"> {{ __('Twitter') }}</td>
                            <td class="px-6 py-4">
                                <input type="text" name="social_twitter" id="social_twitter"
                                    value="{{ $site->social_twitter }}"
                                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                                    required>
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                <input name="social_twitter_link" id="social_twitter_link" type="url"
                                    value="{{ $site->social_twitter_link }}"
                                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                                    required>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>
    <script>
        const aboutDescription = new Quill("#about_description", {
            theme: "snow"
        });
        const addressFull = new Quill("#address_full", {
            theme: "snow"
        });

        const aboutDescriptionInput = document.querySelector("#about_description_input");
        const addressFullInput = document.querySelector("#address_full_input");

        aboutDescription.on("text-change", function() {
            aboutDescriptionInput.value = aboutDescription.root.innerHTML;
        });

        addressFull.on("text-change", function() {
            addressFullInput.value = addressFull.root.innerHTML;
        });
    </script>
@endsection
