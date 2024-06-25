<div>
    @slot('header')
    EDITAR PROMO
    @endslot
    <div class="flex flex-col w-full p-2 m-2 bg-white rounded shadow-lg sm:flex-row"> 
        <div class="flex flex-col">
        <input class="my-4" wire:model='name' placeholder="Nombre" type="text"/>
        </div>
    </div>
    <div class="flex flex-col items-center p-2 m-2 bg-white rounded shadow-lg w-fit sm:flex-row">
        <button wire:click="save" class="p-2 px-4 text-white bg-blue-900 border-2 border-sky-100">Guardar</button>
    </div>
    @include('sweet-alert')
</div>
