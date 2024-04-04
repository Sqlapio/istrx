<?php

namespace App\Livewire;

use App\Models\Reporte as ModelsReporte;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\Browsershot\Browsershot;

class Reporte extends Component
{
    public function generar_reporte()
    {
        try {

            $user = Auth::user()->name;

            $reporte = new ModelsReporte();
            $reporte->fecha = date('d-m-Y');
            $reporte->archivo = 'inspeccion-'.date('d-m-Y').'.pdf';
            $reporte->responsable = $user;
            $reporte->save();

            Browsershot::url('http://istrx.test/informe')
            ->landscape()
            ->save($reporte->archivo);

            session()->flash('success', 'El reporte fue generado con éxito!');

        } catch (\Throwable $th) {
            dd($th);
        }

    }
    public function render()
    {
        return view('livewire.reporte');
    }
}
