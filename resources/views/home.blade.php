@extends('layouts.app')


<?php
$menus = [
    [
        'name' => 'Pengaturan Situs',
        'route' => 'site.index',
        'description' => 'Ubah pengaturan situs utama',
    ],
    [
        'name' => 'Aktivitas',
        'route' => 'activities.index',
        'description' => 'Ubah konfigurasi aktivitas',
    ],
    [
        'name' => 'Galeri',
        'route' => 'galleries.index',
        'description' => 'Ubah konfigurasi galeri',
    ],
    [
        'name' => 'Kontak Kami',
        'route' => 'contact-us.index',
        'description' => 'Baca pesan yang masuk dari kontak kami',
    ],
];

?>
@section('content')
    <div class="container">
        <div class="text-3xl font-bold text-gray-900 mb-4">{{ __('Dashboard') }}</div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            @foreach ($menus as $menu)
                <a class="max-w p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100"
                    href="{{ route($menu['route']) }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $menu['name'] }}</h5>
                    <p class="font-normal text-gray-700">{{ $menu['description'] }}</p>
                </a>
            @endforeach
        </div>
    </div>
@endsection
