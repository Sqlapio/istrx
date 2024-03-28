<div>
    <div x-data="{ selected: null }" class="border border-gray-200 rounded-lg shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]" class="p-3">
        <!-- The accordion items -->
        <div class="[&>*]:border-b [&>*]:border-b-gray-200 last:[&>*]:border-b-0">
            <!-- Accordion item 1 -->
            <div>
                <!-- The button that toggles the accordion item -->
                <button @click="selected !== {{$items->id}} ? selected = {{$items->id}} : selected = null"
                    class="w-full flex justify-between items-center p-3 ">
                    <!-- The title of the accordion item -->
                    <h3 class="text-sm font-semibold">{{ $items->id }}.- {{ $items->descripcion }}</h3>
                    <!-- The icon that indicates whether the accordion item is expanded or collapsed -->
                    <div class="flex items-center">
                        <div class="radial-progress  {{ $total < 100 ? 'text-red-500' : 'text-green-500' }}" style="--value:{{ $total > 0 ? $total : 0 }}; --size:2rem; --thickness: 2px; font-size: 9px; margin-right: 5px;" role="progressbar">{{ $total }}%</div>
                        <span class="text-lg transition-all block" :class="selected === {{$items->id}} ? 'rotate-45' : ''">+</span>
                    </div>
                </button>
                <div x-cloak x-show="selected === {{$items->id}}" class="text-sm rounded-lg text-black/50 p-5 shadow-[0_2.8px_2.2px_rgba(0,_0,_0,_0.034),_0_6.7px_5.3px_rgba(0,_0,_0,_0.048),_0_12.5px_10px_rgba(0,_0,_0,_0.06),_0_22.3px_17.9px_rgba(0,_0,_0,_0.072),_0_41.8px_33.4px_rgba(0,_0,_0,_0.086),_0_100px_80px_rgba(0,_0,_0,_0.12)]" x-transition:enter="transition ease-out duration-100 x-transition:enter-start="transform opacity-0 scale-95">
                    {{-- @foreach($items->get_subitems as $subitems) --}}
                    @for($i = 0; $i < count($items_relation); $i++)
                        <div class="flex justify-between">
                            <p class="mb-2 text-black dark:text-gray-400">{{ $items_relation[$i]->descripcion }}</p>
                            <div class="relative overflow-none">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-2">
                                                <label class="inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" wire:model.live="check" name="check" value="{{ $items_relation[$i]->descripcion }}" class="sr-only peer" wire:click="total()">
                                                    <div class="relative w-11 h-6 bg-green-600 peer-focus:outline-none peer-focus:ring-1 peer-focus:ring-red-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-red-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all peer-checked:bg-red-600"></div>
                                                </label>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <label class="border border-gray-300 p-3 mb-8 w-full block rounded-full cursor-pointer my-1 shadow-lg" x-data="{ files: null }">
                            <input type="file" wire:model="image.{{ $items_relation[$i]->id }}" class="sr-only" value="image.{{ $items_relation[$i]->id }}" id="{{ $items_relation[$i]->id }}" x-on:change="files = Object.values($event.target.files)">
                            <div class="flex items-center">
                                <svg class="w-7 h-7 ml-5 text-[#467696]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M4 18V8a1 1 0 0 1 1-1h1.5l1.707-1.707A1 1 0 0 1 8.914 5h6.172a1 1 0 0 1 .707.293L17.5 7H19a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Z"/>
                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                  </svg>
                                <span style="margin-left: 10px;" x-text="files ? files.map(file => file.name).join(', ') : 'Cargar imagen...'"></span>
                            </div>
                        </label>
                    @endfor
                    {{-- @endforeach --}}
                    <button type="submit" wire:click.prevent="store()" class="flex justify-center w-full h-full rounded-full border border-[#803f11] bg-[#ee700f] py-2 px-4 text-sm items-center sm:text-center font-bold text-white shadow-lg hover:bg-check-green">
                        <svg xmlns="http://www.w3.org/2000/svg" wire:loading wire:target="store" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-spin h-5 w-5 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                        <span class="text-center items-center">Guardar Inspección</span>
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

