<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PT Baja Titian Utama | Konstruksi Jembatan</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional Head -->
    @yield('heads')
</head>

<body>
    <header class="sticky top-0 z-40 w-full border-b bg-background/60 backdrop-blur">
        <nav class="container mx-auto flex items-center justify-between py-2 h-16">
            <div class="flex items-center gap-2">
                <a href="/" class="font-bold text-xl text-primary" aria-label="Home">
                    <img src="/icon/logo.svg" alt="Home" class="h-12" />
                </a>
                <a href="/home" class="text-primary text-xl">{{ __('Halaman Admin') }} </a>
            </div>
            <nav class="gap-6 md:flex">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @endguest
            </nav>
        </nav>
    </header>
    <main class="py-4">
        @yield('content')
    </main>
</body>

@yield('scripts')

</html>
