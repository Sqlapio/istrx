<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use function Livewire\Volt\layout;
use function Livewire\Volt\rules;
use function Livewire\Volt\state;

layout('layouts.guest');

state([
    'name' => '',
    'cedula' => '',
    'tipo' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => ''
]);

rules([
    'name'      => ['required', 'string', 'max:255'],
    'tipo'      => ['required', 'string'],
    'cedula'    => ['required', 'numeric', 'min:3', 'unique:'.User::class],
    'email'     => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    'password'  => ['required', 'string', 'confirmed', Rules\Password::defaults()],
])->messages([
        'cedula.numeric' => 'El valor debe ser numerico',
        // 'cedula.max' => 'El valor no puede ser mayor a 8 digitos',
        'cedula.min' => 'El valor no puede ser menor a 3 digitos',
    ]);

$register = function () {
    $validated = $this->validate();

    $validated['password'] = Hash::make($validated['password']);

    event(new Registered($user = User::create($validated)));

    Auth::login($user);

    $this->redirect(route('dashboard', absolute: false), navigate: true);
};

?>

<div>
    <form wire:submit="register">
        <!-- Name -->
        <div>
            {{-- <x-input-label for="name" :value="__('Nombre y Apellido')" /> --}}
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" placeholder="Nombre y Apellido" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Cedula -->
        <div class="mt-4">
            {{-- <x-input-label for="name" :value="__('Nombre y Apellido')" /> --}}
            <x-text-input wire:model="cedula" id="cedula" class="block mt-1 w-full" type="text" name="cedula" required autofocus autocomplete="cedula" placeholder="Cédula de identidad" />
            <x-input-error :messages="$errors->get('cedula')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" placeholder="Email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-input-select wire:model="tipo" id="tipo" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password"  placeholder="Password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Confimación Password"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        {{-- <div class="flex items-center justify-end mt-4"> --}}
            {{-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a> --}}

            <div class="flex items-center justify-end mt-4">
                <button class="flex justify-center w-full h-full rounded-full border border-[#803f11] bg-[#ee700f] py-3 px-6 mt-1 text-sm items-center sm:text-center font-bold text-white shadow-sm hover:bg-check-green">
                    <svg xmlns="http://www.w3.org/2000/svg" wire:loading wire:target="login" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-spin h-5 w-5 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                    <span class="text-center items-center">Registrar</span>
                </button>
            </div>
        {{-- </div> --}}
    </form>
</div>
