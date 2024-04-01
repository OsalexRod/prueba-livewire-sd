<div>
    <p>Contador livewire : {{ $contador }}</p>

    <button wire:click="incrementarContador">
        Aumentar desde livewire
    </button>

    <div x-data="{ contador: @entangle('contador') }">
        <p>Contador Alpine : <span x-text="contador"></span></p>
        <button x-on:click="contador++">
            aumentar desde Alpine
        </button>
    </div>
    {{-- 
        Nota.- por defecto "@entangle('contador')" ya viene con .defer , asi que los cambios
        solo se ven cuando se ejecuta alguna accion livewire

        Nota.- para hacer que las actualizaciones de forma simultanea se debe aumentar
        .live al final de "@entangle('contador')"
        
    --}}
</div>
