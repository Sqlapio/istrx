<?php

namespace App\Livewire;

use App\Http\Controllers\UtilsController;
use App\Models\DetalleInspeccion;
use App\Models\Item;
use App\Models\Informe;
use App\Models\Inspeccion;
use App\Models\Subitem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Elibyy\TCPDF\Facades\TCPDF;

use function Livewire\Volt\updated;

class Formulario extends Component
{
    use WithFileUploads;
    public $atr = '';
    public array $check;
    public array $image;
    public $item_id;
    public $item_selected = [];

    public $total_vista;
    public $total_inspeccion;

    public $observaciones;

    public $hidden_item = 'hidden';
    public $hidden_observaciones = '';
    public $hidden_botton = '';

    public function total()
    {
        $valores = [];

        for ($i = 0; $i < count($this->check); $i++) {
            $porcentaje = Subitem::where('descripcion', $this->check[$i])->first()->porcentaje;
            array_push($valores, $porcentaje);
        }

        $this->total_vista = array_sum($valores);
    }

    public function ocultar($item)
    {
        $existe = Inspeccion::where('item_id', $item)->where('fecha', date('d-m-Y'))->first();
        if(!isset($existe))
        {
            $this->hidden_item = '';
        }
    }


    protected function final_inspeccion()
    {
        $count = Informe::where('fecha_reporte', date('d-m-Y'))->get()->count();

        if ($count == 10)
        {
            $user = Auth::user()->name;

            /**Log de recorrido */
            // UtilsController::log_recorrido($user, $entrada = null, $accion = 'Finalizo el recorrido, formulario cargado en su totalidad');

            redirect(route('images'));
        }
    }

    public function store()
    {
        try {

            $user = Auth::user()->name;

            $item_descripcion = Item::where('id', $this->item_id)->first()->descripcion;

            $inspeccions = new Inspeccion();
            $inspeccions->codigo = random_int(11111111, 99999999);
            $inspeccions->fecha = date('d-m-Y');
            $inspeccions->item_id = $this->item_id;
            $inspeccions->item = $item_descripcion;
            $inspeccions->porcen_total = 100 - $this->total_vista;
            $inspeccions->observaciones = $this->observaciones;
            $inspeccions->responsable = $user;
            $inspeccions->save();

            /**
             * Guardo el detalle de la inspeccion
             */
            $array_subitems = Subitem::where('item_id', $this->item_id)->get();


            foreach ($array_subitems as $value) {
                $detalle_inspeccions = new DetalleInspeccion();
                $detalle_inspeccions->inspeccion_id = $inspeccions->id;
                if (in_array($value->descripcion, $this->check) == true) {
                    $detalle_inspeccions->status = 2;
                }
                $detalle_inspeccions->fecha = date('d-m-Y');
                $detalle_inspeccions->item_id = $value->item_id;
                $detalle_inspeccions->subitem = $value->descripcion;
                $detalle_inspeccions->responsable = $user;
                $detalle_inspeccions->save();
            }

            foreach ($this->image as $key => $valor) {
                $img = $valor->store('/photos', 'public');
                $sub_i = Subitem::where('id', $key)->first()->descripcion;
                DB::table('detalle_inspeccions')
                    ->where('subitem', $sub_i)
                    ->update([
                        'image' => $img
                    ]);
            }

            sleep(.5);

            $this->hidden_item = 'hidden';


        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function render()
    {
        $item_id = $this->item_id;
        $total = 100 - $this->total_vista;
        $items = Item::find($this->item_id);
        $items_relation = $items->get_subitems;

        return view('livewire.formulario', compact('items', 'total', 'item_id','items_relation'));
    }
}
