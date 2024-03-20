@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div id="alert" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50" role="alert">
                {{ session('success') }}
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8"
                    data-dismiss-target="#alert" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif

        <div class="text-3xl font-bold text-gray-900 mb-4">{{ __('Konfigurasi Situs Utama') }}</div>
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
                        <td class="px-6 py-4"> {{ $site->hero_title }}</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td scope="row" class="px-6 py-4"> {{ __('Subjudul Hero') }}</td>
                        <td class="px-6 py-4"> {{ $site->hero_subtitle }}</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td scope="row" class="px-6 py-4"> {{ __('Judul Profile') }}</td>
                        <td class="px-6 py-4"> {{ $site->about_title }}</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td scope="row" class="px-6 py-4"> {{ __('Deskripsi Profil') }}</td>
                        <td class="px-6 py-4"> {!! $site->about_description !!}</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td scope="row" class="px-6 py-4"> {{ __('Alamat Lengkap') }}</td>
                        <td class="px-6 py-4"> {!! $site->address_full !!}</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td scope="row" rowspan="2" class="px-6 py-4"> {{ __('Facebook') }}</td>
                        <td class="px-6 py-4"> {{ $site->social_facebook }}</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4"> {{ $site->social_facebook_link }}</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td scope="row" rowspan="2" class="px-6 py-4"> {{ __('Instagram') }}</td>
                        <td class="px-6 py-4"> {{ $site->social_instagram }}</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4"> {{ $site->social_instagram_link }}</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td scope="row" rowspan="2" class="px-6 py-4"> {{ __('Twitter') }}</td>
                        <td class="px-6 py-4"> {{ $site->social_twitter }}</td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4"> {{ $site->social_twitter_link }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <a href="{{ route('site.edit') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Edit') }}
            </a>
        </div>
    </div>
@endsection
