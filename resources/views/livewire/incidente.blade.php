<div>

    <div x-data="{ selected: null }" class="border border-gray-200 rounded-lg shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]" class="p-3">
        <!-- The accordion items -->
        <div class="[&>*]:border-b [&>*]:border-b-gray-200 last:[&>*]:border-b-0">
            <!-- Accordion item 1 -->
            <div>
                <!-- The button that toggles the accordion item -->
                <button @click="selected !== 1 ? selected = 1 : selected = null"  class="w-full flex justify-between items-center p-3 ">
                    <!-- The title of the accordion item -->
                    <h3 class="text-sm font-semibold">Formulario de Incidentes</h3>
                    <!-- The icon that indicates whether the accordion item is expanded or collapsed -->
                    <div class="flex items-center">
                        <span class="text-lg transition-all block" :class="selected === 1 ? 'rotate-45' : ''">+</span>
                    </div>
                </button>

                    <div x-cloak x-show="selected === 1" class="text-sm rounded-lg text-black/50 p-5 shadow-[0_2.8px_2.2px_rgba(0,_0,_0,_0.034),_0_6.7px_5.3px_rgba(0,_0,_0,_0.048),_0_12.5px_10px_rgba(0,_0,_0,_0.06),_0_22.3px_17.9px_rgba(0,_0,_0,_0.072),_0_41.8px_33.4px_rgba(0,_0,_0,_0.086),_0_100px_80px_rgba(0,_0,_0,_0.12)]" x-transition:enter="transition ease-out duration-100 x-transition:enter-start="transform opacity-0 scale-95">
                        {{-- @foreach($items->get_subitems as $subitems) --}}
                                <div class="grid gap-3 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 lg:gap-3">
                                    <div class="flex justify-center w-full">
                                        <x-text-input wire:model="descripcion" id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" required autofocus autocomplete="incidente" placeholder="Incidente"/>
                                        <x-input-error :messages="$errors->get('incidente')" class="mt-2" />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="flex justify-center w-full">
                                        <x-text-input wire:model="acciones" id="acciones" class="block mt-1 w-full" type="text" name="acciones" required autocomplete="username" placeholder="Acciones"/>
                                        <x-input-error :messages="$errors->get('accion')" class="mt-2" />
                                    </div>

                                    <div class="flex justify-center w-full mb-4">
                                        <textarea wire:model="observaciones" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describa detalladamente"></textarea>
                                    </div>

                                </div>
                        {{-- @endforeach --}}
                        <button type="submit" wire:click.prevent="store()" class="flex justify-center w-full h-full rounded-full border border-[#803f11] bg-[#ee700f] py-2 px-4 text-sm items-center sm:text-center font-bold text-white shadow-lg hover:bg-check-green">
                            <svg xmlns="http://www.w3.org/2000/svg" wire:loading wire:target="store" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-spin h-5 w-5 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                            <span class="text-center items-center">Guardar Incidente</span>
                        </button>
                    </div>

            </div>
        </div>
    </div>
    {{-- @foreach([10, 11, 12, 13] as $k => $v)
    {{ $k }}
    @endforeach --}}
    {{-- <input class="filepond" type="file"  id="{{$items->id}}" multiple  data-allow-reorder="true" data-max-file-size="5MB" data-max-files="3" wire.model="file" style="text-decoration-color: #ec0303;"> --}}

</div>


