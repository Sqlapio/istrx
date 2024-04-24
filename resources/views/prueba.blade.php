<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans">
    @php
    use App\Models\User;
    use App\Models\DetalleInspeccion;
    use App\Models\Inspeccion;

    $user = User::find(1)->name;
    $inspeccion = Inspeccion::where('fecha', date('d-m-Y'))->get();

    $inspeccion_status_1 = DetalleInspeccion::where('fecha', date('d-m-Y'))->get();
    // dd($inspeccion_status_1);

    @endphp
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div class="flex justify-end">
            <header class="grid grid-cols-2 items-center gap-2 lg:grid-cols-3">
                @if (Route::has('login'))
                    <livewire:welcome.navigation />
                @endif
            </header>
        </div>
        <div class="min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="w-full">
                <header class="grid grid-cols-2 items-center gap-2 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <img class="" src="{{ asset('images/trx.png') }}" alt="">
                    </div>
                </header>

                <footer class="text-center text-sm text-black dark:text-white/70">
                    © 2024 <a href="https://sqlapio.com/" class="hover:underline">Desarrollado por: SqlapioTechnology™</a>. All Rights Reserved.</span>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>

