<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\LogRecorrido;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class UtilsController extends Controller
{
    static function log_recorrido($usuario, $entrada, $accion)
    {
        // try {

        //     $log = new LogRecorrido();
        //     $log->usuario = $usuario;
        //     $log->entrada = $entrada;
        //     $log->accion = $accion;
        //     $log->save();

        // } catch (\Throwable $th) {
        //     dd($th);
        // }
    }

    static function entrada($user_id)
    {
        try {

            $asistencia = new Asistencia();
            $asistencia->user_id = $user_id;
            $asistencia->fecha = date('d-m-Y');
            $asistencia->entrada = '1';
            $asistencia->save();

        } catch (\Throwable $th) {
            dd($th);
        }
    }

    static function salida($user_id)
    {
        try {
            Asistencia::where('user_id', $user_id)
            ->where('entrada', '1')
            ->where('fecha', date('d-m-Y'))
            ->update(['salida' => '1']);

        } catch (\Throwable $th) {
            dd($th);
        }
    }

}
