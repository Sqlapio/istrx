<?php

namespace App\Livewire;

use App\Models\DetalleInspeccion as ModelsDetalleInspeccion;
use Livewire\Component;

class DetalleInspeccion extends Component
{
    public $inspeccion_id;

    public function render()
    {
        $array = ModelsDetalleInspeccion::where('inspeccion_id', $this->inspeccion_id)->where('fecha', date('d-m-Y'))->get();
        return view('livewire.detalle-inspeccion', compact('array'));
    }
}
