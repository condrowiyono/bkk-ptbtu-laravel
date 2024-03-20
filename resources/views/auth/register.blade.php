@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-3xl font-bold text-gray-900">{{ __('Register') }}</div>
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">{{ __('Name') }}</label>
                <input value="{{ old('name') }}" autocomplete="name" autofocus name="name" type="text" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                    required />
                @error('name')
                    <span class="text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">{{ __('Email Address') }}</label>
                <input value="{{ old('email') }}" autocomplete="email" autofocus name="email" type="email"
                    id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                    required />
                @error('email')
                    <span class="text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">{{ __('Password') }}</label>
                <input value="{{ old('password') }}" name="password" id="password" type="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                    required />
                @error('password')
                    <span class="text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div>
                <label for="password-confirm"
                    class="block mb-2 text-sm font-medium text-gray-900">{{ __('Confirm Password') }}</label>
                <input name="password_confirmation" id="password-confirm" type="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                    required />
            </div>
            <div>
                <button type="submit"
                    class="bg-primary text-white py-2 font-medium rounded-lg focus:ring-primary focus:border-primary block w-full">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
@endsection
