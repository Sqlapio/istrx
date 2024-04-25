<?php

namespace App\Livewire;

use App\Http\Controllers\UtilsController;
use App\Models\Asistencia;
use App\Models\User;
use App\Models\Geolocalizacion;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginExterno extends Component
{
    // use Actions;

    #[Validate('required|numeric|digits_between:3,8', message: 'Campo requerido')]
    public $cedula;

    public $lat;
    public $lng;

    public function getGeoLocalizacion($long, $lat)
    {
       $this->lng = $long;
       $this->lat = $lat;
    }

    public function validar()
    {
        $this->validate();

        try {

            $user = User::where('cedula', $this->cedula)->where('tipo', '3')->first();

            if(isset($user))
            {
                Auth::login($user);
                $user_logueado = Auth::user();

                $lat = number_format($this->lat, 4, '.');
                $long = number_format($this->lng, 4, '.');
                $coords = Geolocalizacion::where('latitud', $lat)->where('longitud', $long)->first();
                if(isset($coords))
                {
                    /**Pregunto? si el usuario ya tiene registros de entrada y salida del dia actual*/
                    $_entSal = Asistencia::where('user_id', $user_logueado->id)
                    ->where('entrada', '1')
                    ->where('salida', '1')
                    ->where('fecha', date('d-m-Y'))
                    ->first();

                    if(isset($_entSal)){
                        session()->flash('notificacion', 'El usuario ya posse registros de entrada y salida.');

                    }else{
                        /**Pregunto? si el usuario ya se registro el dia de hoy */
                        $user_entrada = Asistencia::where('user_id', $user_logueado->id)->where('fecha', date('d-m-Y'))->first();
                        if(!isset($user_entrada)){
                            UtilsController::entrada($user_logueado->id);

                        }else{
                            UtilsController::salida($user_logueado->id);
                        }
                    }

                    // return redirect(ProvidersRouteServiceProvider::HOME);
                    $this->redirectRoute('login-externo');

                }else{
                    session()->flash('notificacion', 'El usuario no se encuentra en la ubicación correcta.');

                }

            }else{
                session()->flash('notificacion', 'El usuario no se encuentra registrado. Pongase en contacto con el Admistrador del Sistema');
            }

        } catch (\Throwable $th) {
            dd($th);
        }
    }

    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.login-externo');
    }
}
