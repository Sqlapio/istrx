<?php

namespace App\Livewire;

use App\Models\Incidente as ModelsIncidente;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Incidente extends Component
{
    #[Validate('required')]
    public $descripcion;

    #[Validate('required')]
    public $acciones;

    public $observaciones;

    public function store(){

        $this->validate();

        $user = Auth::user()->name;

        $incidente = new ModelsIncidente();
        $incidente->descripcion = $this->descripcion;
        $incidente->acciones = $this->acciones;
        $incidente->fecha = date('d-m-Y');
        $incidente->observaciones = $this->observaciones;
        $incidente->responsable = $user;
        $incidente->save();

        return redirect()->to('/dashboard');
    }


    public function render()
    {
        return view('livewire.incidente');
    }
}
