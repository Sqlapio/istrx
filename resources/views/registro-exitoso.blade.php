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
                    <div class="flex justify-center mb-5">
                        <div class="w-full max-w-sm bg-white dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex flex-col items-center pb-10 gap-y-10">
                                <img class="animate-pulse w-full h-auto border border-green-700 rounded-full shadow-[0_2.8px_2.2px_rgba(0,_0,_0,_0.034),_0_6.7px_5.3px_rgba(0,_0,_0,_0.048),_0_12.5px_10px_rgba(0,_0,_0,_0.06),_0_22.3px_17.9px_rgba(0,_0,_0,_0.072),_0_41.8px_33.4px_rgba(0,_0,_0,_0.086),_0_100px_80px_rgba(0,_0,_0,_0.12)]" src="{{ asset('images/vector.jpg') }}" alt="Bonnie image"/>
                                <div>
                                    <h5 class="mb-1 mt-1 text-3xl font-bold uppercase text-green-800">Registro Exitoso</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="text-center text-sm text-black dark:text-white/70 mt-5">
                        © 2024 <a href="https://sqlapio.com/" class="hover:underline">Desarrollado por: SqlapioTechnology™</a>. All Rights Reserved.</span>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
