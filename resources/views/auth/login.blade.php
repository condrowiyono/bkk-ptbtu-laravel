@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-3xl font-bold text-gray-900">{{ __('Login') }}</div>
        <form method="POST" action="{{ route('login') }}" class="space-y-8">
            @csrf

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">{{ __('Email Address') }}</label>
                <input value="{{ old('email') }}" autocomplete="email" autofocus name="email" type="email" id="email"
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
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" />
                    <label for="remember"
                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Remember me') }}</label>
                </div>
            </div>
            <div>
                <button type="submit"
                    class="bg-primary text-white py-2 font-medium rounded-lg focus:ring-primary focus:border-primary block w-full">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
@endsection
