@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-3xl font-bold text-gray-900 mb-4">{{ __('Tambah Konfigurasi Aktivitas') }}</div>

        <form method="POST" action="{{ route('activities.store') }}" class="space-y-8">
            @csrf
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-900 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-1/4"> {{ __('Nama') }}</th>
                            <th scope="col" class="px-6 py-3"> {{ __('Deskripsi') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td scope="row" class="px-6 py-4">
                                <input type="text" name="name" id="name"
                                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                                    required>
                            </td>
                            <td class="px-6 py-4">
                                <input type="text" name="description" id="description"
                                    class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"
                                    required>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-primary text-white px-4 py-2 rounded hover:bg-primary/90 transition duration-200">{{ __('Simpan') }}</button>
            </div>
    </div>
@endsection
