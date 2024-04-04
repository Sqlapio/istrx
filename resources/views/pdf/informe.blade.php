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

    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #customers td, #customers th {
          border: 1px solid rgb(0, 0, 0);
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #000000;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          color: red;
        }
    </style>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="antialiased font-sans">
    @php
    use App\Models\User;
    use App\Models\DetalleInspeccion;
    use App\Models\Inspeccion;
    use App\Models\Reporte;

    $user = User::find(1)->name;
    $inspeccion = Inspeccion::where('fecha', date('d-m-Y'))->get();
    $reportes = Reporte::where('fecha', date('d-m-Y'))->get();

    @endphp
    <div class="bg-white text-black/50">
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                    <div class="flex lg:justify-between lg:col-start-2">
                        <img class="p-4 h-[150px]" src="{{ asset('images/bdt.jpg') }}" alt="">
                        <div class="flex py-12">
                            <div>
                                <p class="text-xl text-center text-black font-extrabold">Línea 1 - Estación del Metro Chacao</p>
                                <p class="text-xl text-center text-red-600 font-extrabold">Padrino: Banco del Tesoro, C.A. Banco Universal</p>
                                <p class="text-sm text-center text-red-600 font-extrabold">Fecha de Inspección: {{ date('d-m-Y') }}</p>
                            </div>
                        </div>
                        <img class="p-4 h-[150px]" src="{{ asset('images/plan_metro.jpg') }}" alt="">
                    </div>
                <main class="p-1">
                    <div class="grid gap-2 lg:grid-cols-3 lg:gap-2 mb-2 ">
                        <div class="flex items-center justify-center gap-4 border border-black rounded-lg bg-white p-2 w-[320px]">

                                <img class="object-cover w-[320px] h-[400px]" src="{{ asset('images/IMG-20240403-WA0013.jpg') }}" alt="">

                        </div>
                        <div class="flex items-center gap-4 border border-black rounded-lg bg-white p-6 w-[320px]">

                                <img class="object-cover w-[320px] h-[400px]" src="{{ asset('images/IMG-20240403-WA0014.jpg') }}" alt="">

                        </div>
                        <div class="flex items-center gap-4 border border-black rounded-lg bg-white p-6 w-[320px]">

                                <img class="object-cover w-[320px] h-[400px]" src="{{ asset('images/IMG-20240403-WA0015.jpg') }}" alt="">

                        </div>
                    </div>
                </main>

                <footer class="py-1 text-center text-sm text-black dark:text-white/70">
                    {{-- Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) --}}
                    <div class="flex lg:justify-between lg:col-start-2">
                        <img class="p-4 h-[140px]" src="{{ asset('images/gbv.png') }}" alt="">
                        <div class="flex py-16">
                            <div>
                                <p class="text-sm text-center text-gray-400">© 2024 Desarrollado por: Inversiones TRX™. All Rights Reserved. - https://inversionestrx.com -</span></p>
                            </div>
                        </div>
                        <img class="p-4 h-[130px]" src="{{ asset('images/logo200.jpg') }}" alt="">
                    </div>
                </footer>
            </div>
        </div>
    </div>
    @pageBreak
    <div class="bg-white text-black/50">
        <div class="relative min-h-full flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                    <div class="flex lg:justify-between lg:col-start-2">
                        <img class="p-4 h-[150px]" src="{{ asset('images/bdt.jpg') }}" alt="">
                        <div class="flex py-12">
                            <div>
                                <p class="text-xl text-center text-black font-extrabold">Línea 1 - Estación del Metro Chacao</p>
                                <p class="text-xl text-center text-red-600 font-extrabold">Padrino: Banco del Tesoro, C.A. Banco Universal</p>
                                <p class="text-sm text-center text-red-600 font-extrabold">Fecha de Inspección: {{ date('d-m-Y') }}</p>
                            </div>
                        </div>
                        <img class="p-4 h-[150px]" src="{{ asset('images/plan_metro.jpg') }}" alt="">
                    </div>
                <main class="p-1">
                    <div class="grid gap-2 lg:grid-cols-3 lg:gap-2 mb-2 ">
                        <div class="flex items-center justify-center gap-4 border border-black rounded-lg bg-white p-2 w-[320px]">

                                <img class="object-cover w-[320px] h-[400px]" src="{{ asset('images/IMG-20240403-WA0013.jpg') }}" alt="">

                        </div>
                        <div class="flex items-center gap-4 border border-black rounded-lg bg-white p-6 w-[320px]">

                                <img class="object-cover w-[320px] h-[400px]" src="{{ asset('images/IMG-20240403-WA0014.jpg') }}" alt="">

                        </div>
                        <div class="flex items-center gap-4 border border-black rounded-lg bg-white p-6 w-[320px]">

                                <img class="object-cover w-[320px] h-[400px]" src="{{ asset('images/IMG-20240403-WA0015.jpg') }}" alt="">

                        </div>
                    </div>
                </main>

                <footer class="py-1 text-center text-sm text-black dark:text-white/70">
                    {{-- Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) --}}
                    <div class="flex lg:justify-between lg:col-start-2">
                        <img class="p-4 h-[140px]" src="{{ asset('images/gbv.png') }}" alt="">
                        <div class="flex py-16">
                            <div>
                                <p class="text-sm text-center text-gray-400">© 2024 Desarrollado por: Inversiones TRX™. All Rights Reserved. - https://inversionestrx.com -</span></p>
                            </div>
                        </div>
                        <img class="p-4 h-[130px]" src="{{ asset('images/logo200.jpg') }}" alt="">
                    </div>
                </footer>
            </div>
        </div>
    </div>
    @pageBreak
    <div class="bg-white text-black/50">
        <div class="relative min-h-full flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                <div class="flex lg:justify-between lg:col-start-2">
                    <img class="p-4 h-[150px]" src="{{ asset('images/bdt.jpg') }}" alt="">
                    <div class="flex py-12">
                        <div>
                            <p class="text-xl text-center text-black font-extrabold">Línea 1 - Estación del Metro Chacao</p>
                            <p class="text-xl text-center text-red-600 font-extrabold">Padrino: Banco del Tesoro, C.A. Banco Universal</p>
                            <p class="text-sm text-center text-red-600 font-extrabold">Fecha de Inspección: {{ date('d-m-Y') }}</p>
                        </div>
                    </div>
                    <img class="p-4 h-[150px]" src="{{ asset('images/plan_metro.jpg') }}" alt="">
                </div>
                <main class="p-1">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        {{-- <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-sm text-white font-extrabold uppercase bg-red-600 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3 bg-red-600">
                                        SISTEMAS Y/O AMBIENTES
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-red-600">
                                        %OPERATIVIDAD
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-red-600">
                                        OBSERVACIONES
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inspeccion as $value)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" class="px-6 py-2 font-extrabold text-black whitespace-nowrap ">
                                            {{ $value->id }}.- {{ $value->item }}
                                        </th>
                                        <td class="px-6 py-2">
                                            {{ $value->porcen_total }}%
                                        </td>
                                        <td class="px-6 py-2">
                                            {{ ($value->observaciones == NULL) ? 'Sin observaciones' : $value->observaciones }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}
                        <table id="customers">
                            <tr>
                              <th>SISTEMAS Y/O AMBIENTES</th>
                              <th>%OPERATIVIDAD</th>
                              <th>OBSERVACIONES</th>
                            </tr>
                            @foreach ($inspeccion as $value)
                            <tr>
                              <td>{{ $value->id }}.- {{ $value->item }}</td>
                              <td>{{ $value->porcen_total }}%</td>
                              <td>{{ ($value->observaciones == NULL) ? 'Sin observaciones' : $value->observaciones }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </main>
                <footer class="py-1 text-center text-sm text-black dark:text-white/70">
                    {{-- Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) --}}
                    <div class="flex lg:justify-between lg:col-start-2">
                        <img class="p-4 h-[140px]" src="{{ asset('images/gbv.png') }}" alt="">
                        <div class="flex py-16">
                            <div>
                                <p class="text-sm text-center text-gray-400">© 2024 Desarrollado por: Inversiones TRX™. All Rights Reserved. - https://inversionestrx.com -</span></p>
                            </div>
                        </div>
                        <img class="p-4 h-[130px]" src="{{ asset('images/logo200.jpg') }}" alt="">
                    </div>
                </footer>
            </div>
        </div>
    </div>
    @pageBreak
    <div class="bg-white text-black/50">
        <div class="relative min-h-full flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                <div class="flex lg:justify-between lg:col-start-2">
                    <img class="p-4 h-[150px]" src="{{ asset('images/bdt.jpg') }}" alt="">
                    <div class="flex py-12">
                        <div>
                            <p class="text-xl text-center text-black font-extrabold">Línea 1 - Estación del Metro Chacao</p>
                            <p class="text-xl text-center text-red-600 font-extrabold">Padrino: Banco del Tesoro, C.A. Banco Universal</p>
                            <p class="text-sm text-center text-red-600 font-extrabold">Fecha de Inspección: {{ date('d-m-Y') }}</p>
                        </div>
                    </div>
                    <img class="p-4 h-[150px]" src="{{ asset('images/plan_metro.jpg') }}" alt="">
                </div>
                <main class="p-1">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <table id="customers">
                            <tr>
                              <th>INCIDENTE</th>
                              <th>ACCIONES</th>
                              <th>OBSERVACIONES</th>
                            </tr>
                            @foreach ($reportes as $value)
                            <tr>
                              <td>{{ ($value->descripcion == NULL) ? 'Sin incidentes reportados' : $value->descripcion }}</td>
                              <td>{{ ($value->acciones == NULL) ? 'Sin acciones reportadas' : $value->acciones }}</td>
                              <td>{{ ($value->observaciones == NULL) ? 'Sin observaciones' : $value->observaciones }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </main>
                <footer class="py-1 text-center text-sm text-black dark:text-white/70">
                    {{-- Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) --}}
                    <div class="flex lg:justify-between lg:col-start-2">
                        <img class="p-4 h-[140px]" src="{{ asset('images/gbv.png') }}" alt="">
                        <div class="flex py-16">
                            <div>
                                <p class="text-sm text-center text-gray-400">© 2024 Desarrollado por: Inversiones TRX™. All Rights Reserved. - https://inversionestrx.com -</span></p>
                            </div>
                        </div>
                        <img class="p-4 h-[130px]" src="{{ asset('images/logo200.jpg') }}" alt="">
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>

