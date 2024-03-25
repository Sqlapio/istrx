<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="flex flex-col min-h-screen justify-center items-center bg-white px-6 mt-auto sm:pt-0 overflow-hidden">
            <div class="items-center">
                <img src="{{ asset('images/trx.png') }}" class="w-auto h-auto" alt="">
            </div>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
            <footer class="bg-white rounded-lg m-4">
                <div class="w-full max-w-screen-md mx-auto p-5 md:py-8">
                    <span class="block text-sm text-gray-500 text-center">© 2024 <a href="https://flowbite.com/" class="hover:underline">Desarrollado por: SqlapioTechnology™</a>. All Rights Reserved.</span>
                </div>
            </footer>
        </div>
    </body>
</html>
