@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-4">
        <div class="text-3xl font-bold text-gray-900 mb-4">{{ __('Detail Pesan') }}</div>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $message->name }}
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    {{ $message->email }}
                </p>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    <td class="px-6 py-4"> {{ Carbon\Carbon::parse($message->created_at)->format('d F Y H:i') }}</td>
                </p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500 hidden">
                            Message
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $message->message }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="mt-4">
            <form method="POST" action="{{ route('contact-us.reply') }}" class="space-y-8">
                @csrf
                <input class="hidden" name="recipient" value="{{ $message->email }}">
                <div>
                    <label for="reply" class="block text-sm font-medium text-gray-700">Balas</label>
                    <textarea id="reply" name="reply" rows="3"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                </div>
                <button type="submit"
                    class="mt-2 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Kirim
                </button>
            </form>
        </div>
    </div>
@endsection
