@php
use App\Models\User;
use App\Models\Reporte;

$reportes = Reporte::all();

@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Historial de Informes - Estación Metro de Chacao') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-black uppercase bg-[#ee700f] dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Fecha de Inspección
                </th>
                <th scope="col" class="px-6 py-3">
                    Responsable
                </th>
                <th scope="col" class="px-6 py-3">
                    Cargo
                </th>
                <th scope="col" class="px-6 py-3">
                    Archivo
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reportes as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->fecha }}
                </th>
                <td class="px-6 py-4">
                    {{ $item->responsable }}
                </td>
                <td class="px-6 py-4">
                    {{ $item->cargo }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ asset('/'.$item->archivo) }}" target="_blank">Ver archivo</a>
                </td>
                <td class="px-6 py-4">
                    <a class="text-green-600 dark:text-gray-400" href="{{ asset('/'.$item->archivo) }}" download="{{ $item->archivo }}">Descargar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
