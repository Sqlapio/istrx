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

        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-3xl px-4 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <img class="p-4" src="{{ asset('images/trx.png') }}" alt="">
                    </div>
                </header>

                <main class="mt-2">
                    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-2 lg:gap-8">
                        @foreach ($inspeccion as $item)
                        <div class="flex items-start gap-4 rounded-xl bg-white shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div class="border-1 rounded-full">
                                {{-- div para carucel de imagenes --}}
                                @livewire('detalle-inspeccion', ['inspeccion_id' => $item->id])

                                <div class="flex w-full p-5">
                                    <!-- Titulo del Item -->
                                    <dl>
                                        <div>
                                            <dd class="text-sm text-gray-700 font-extrabold">{{ $item->id }}.- {{ $item->item }}</dd>
                                        </div>
                                        <div>
                                            <dd class="text-sm text-gray-500">Fecha: {{ date('d-m-Y') }}</dd>
                                        </div>
                                        <div>
                                            <dd class="text-sm text-gray-500">Responsable: {{ $item->responsable }}</dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    © 2024 <a href="https://sqlapio.com/" class="hover:underline">Desarrollado por: SqlapioTechnology™</a>. All Rights Reserved.</span>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>

