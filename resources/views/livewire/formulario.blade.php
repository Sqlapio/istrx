<div>
    <div x-data="{ selected: null }" class="border border-gray-200 rounded-lg" class="p-3">
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
                    <div>
                        <span class="text-lg transition-all block" :class="selected === {{$items->id}} ? 'rotate-45' : ''">+</span>
                    </div>
                </button>
                <div x-cloak x-show="selected === {{$items->id}}" class="text-sm text-black/50 p-3" x-transition:enter="transition ease-out duration-100 x-transition:enter-start="transform opacity-0 scale-95">
                    @foreach($items->get_subitems as $subitems)
                        <div class="flex justify-between">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $subitems->descripcion }}</p>
                            <div class="relative overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-2">
                                                <label class="inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" wire:model="check.{{ $subitems->id }}" name="check" value="{{ $subitems->id }}" class="sr-only peer">
                                                    <div wire:key="{{ $subitems->id }}" class="relative w-11 h-6 bg-green-600 peer-focus:outline-none peer-focus:ring-1 peer-focus:ring-red-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-red-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all peer-checked:bg-red-600"></div>
                                                </label>
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <label class="border-2 border-gray-200 p-3 mb-8 w-full block rounded-full cursor-pointer my-1" x-data="{ files: null }">
                            <input type="file" wire:model="image.{{ $subitems->id }}" class="sr-only" value="image.{{ $subitems->id }}" id="{{ $subitems->id }}" x-on:change="files = Object.values($event.target.files)">
                            <span x-text="files ? files.map(file => file.name).join(', ') : 'Cargar imagen...'"></span>
                        </label>
                    @endforeach
                    <button type="submit" wire:click.prevent="store()" class="flex justify-center w-full h-full rounded-full bg-black py-2 px-4 text-sm items-center sm:text-center font-bold text-white shadow-sm hover:bg-check-green">
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

