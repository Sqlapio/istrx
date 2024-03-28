@php

use App\Models\Item;
use App\Models\Recorrido;
use App\Models\Subitem;

    $items = Item::all();

@endphp
<x-app-layout>
    @for($i = 0; $i < count($items); $i++)
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Formulario de Inspección') }}
            </h2>
        </x-slot>

        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-3 text-gray-900 dark:text-gray-100">
                    @livewire('formulario', ['item_id' => $items[$i]->id])
                </div>
            </div>
        </div>
    @endfor
</x-app-layout>
