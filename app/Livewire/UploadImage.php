<?php

namespace App\Livewire;

use App\Models\Asistencia;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImage extends Component
{
    use WithFileUploads;

    public $image;

    public function uploadImage(Request $request) {

        try {

            $user = Auth::user();
            $hoy = date('d-m-Y');
            $image = $this->image->store('photos/' . date('dmY'));

            $empleado = Asistencia::where('user_id', $user->id)->where('fecha', $hoy)->where('entrada', '1')->update([
                'image' => $image
            ]);

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/registro-exitoso');

        } catch (\Throwable $th) {
            dd($th);
        }


    }
    public function render()
    {
        return view('livewire.upload-image');
    }
}
