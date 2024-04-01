<!-- component 
https://tailwindcomponents.com/component/modal-transition-animation
-->
<div x-data="{ open: false }">
    <!-- Open modal button -->
    <button x-on:click="open = true" type="button" class="ml-5 bg-green-300 rounded-md border-green-400 w-20 h-full hover:bg-green-400 focus:outline-none focus:ring focus:ring-green-500">Crear</button>
    <!-- Modal Overlay -->
    <div x-show="open" class="fixed inset-0 px-2 z-10 overflow-hidden flex items-center justify-center">
      <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
      <!-- Modal Content -->
      <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="bg-white rounded-md shadow-xl overflow-hidden max-w-md w-full sm:w-96 md:w-1/2 lg:w-2/3 xl:w-1/3 z-50">
        <!-- Modal Header -->
        <div class="bg-green-500 text-white px-4 py-2 flex justify-between">
          <h2 class="text-lg font-semibold">Crear Cliente</h2>
        </div>
        <!-- Modal Body -->
        <div class="p-4">
          <form wire:submit="guardar">
            <p class="mb-2 mt-2">Nombre</p>  
            <input class="w-full rounded-lg" type="text" wire:model="nombre2">
            <p class="mb-2 mt-4">Ci</p>  
            <input class="w-full rounded-lg" type="text" wire:model="ci">
            <p class="mb-2 mt-4">Telefono</p>  
            <input class="w-full rounded-lg" type="text" wire:model="telefono">
            <button type="submit">Save</button>
          </form>
        </div>
        <!-- Modal Footer -->
        <div class="border-t px-4 py-2 flex justify-end">
          <button x-on:click="open = false" class="px-3 py-1 bg-green-500 text-white  rounded-md w-full sm:w-auto"> Guardar </button>
        </div>
      </div>
    </div>
  </div>