<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ISTRX</title>

        <link rel="icon" sizes="256x256" href="{{ asset('images/favicon.ico') }}">
        <link rel="icon" sizes="180x180" href="{{ asset('images/favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/trx.png') }}"/>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="min-h-screen flex items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="w-full max-w-2xl px-6 lg:max-w-7xl">
                    {{-- <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header> --}}
                    <div class="flex justify-center">
                        <img class="p-4" src="{{ asset('images/trx.png') }}" alt="">
                    </div>
                    <header class="grid grid-cols-1 items-center justify-center gap-2 py-10 lg:grid-cols-1">
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>
                    <footer class="text-center text-sm text-black dark:text-white/70">
                        © 2024 <a href="https://sqlapio.com/" class="hover:underline">Desarrollado por: SqlapioTechnology™</a>. All Rights Reserved.</span>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
