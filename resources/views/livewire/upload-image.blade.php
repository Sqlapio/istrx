<div class="p-10">

<div class="flex items-center justify-center w-full">
    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed border-[#ee700f] rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center p-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Cargar Imagen</label>
            <input wire:model='image' class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG(MAX. 800x400px).</p>
        </div>
        <input wire:model="image" id="dropzone-file" type="file" class="hidden" />
    </label>
</div>
<div class="flex items-center justify-center mt-4">
    <button type="submit" wire:click.prevent="uploadImage()" class="flex justify-center w-full h-full rounded-full border border-[#803f11] bg-[#ee700f] py-3 px-6 mt-1 text-sm items-center sm:text-center font-bold text-white shadow-sm hover:bg-check-green">
        <svg xmlns="http://www.w3.org/2000/svg" wire:loading wire:target="uploadImage" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-spin h-5 w-5 mr-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
        </svg>
        <span class="text-center items-center">Cargar Imagen</span>
    </button>
</div>

</div>
