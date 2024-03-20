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

        <div class="text-3xl font-bold text-gray-900 mb-4">{{ __('Kontak Kami') }}</div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-900 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 w-1/4"> {{ __('Nama Pengirim') }}</th>
                    <th scope="col" class="px-6 py-3"> {{ __('Email') }}</th>
                    <th scope="col" class="px-6 py-3"> {{ __('Pesan') }}</th>
                    <th scope="col" class="px-6 py-3"> {{ __('Dikirim Pada') }}</th>
                    <th scope="col" class="px-6 py-3"> {{ __('Baca') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactUs as $contact)
                    <tr class="bg-white border-b">
                        <td scope="row" class="px-6 py-4"> {{ $contact->name }}</td>
                        <td class="px-6 py-4"> {{ $contact->email }}</td>
                        <td class="px-6 py-4"> {{ Str::limit($contact->message, 50) }}</td>
                        <td class="px-6 py-4"> {{ Carbon\Carbon::parse($contact->created_at)->format('d F Y H:i') }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('contact-us.show', $contact->id) }}"
                                class="bg-primary text-white px-4 py-2 rounded hover:bg-primary/90 transition duration-200">{{ __('Baca') }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-8 space-x-4">
            {{ $contactUs->links() }}
        </div>
    </div>
@endsection
