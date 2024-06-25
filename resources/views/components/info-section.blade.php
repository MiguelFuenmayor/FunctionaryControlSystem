<div class="flex flex-col items-center w-full p-2 m-2 bg-white rounded shadow-lg sm:flex-row">
  <h class="w-full text-xl "> {{$row->name}} <h>
  <hr class="h-px m-2 mx-2 bg-gray-200 border-0 dark:bg-gray-700">
  <!-- AQUI UN GRAFICO -->
</div>  
<div class="flex flex-col items-center p-2 m-2 bg-white rounded shadow-lg w-fit sm:flex-row">
  <button wire:click="edit" class="p-2 px-4 text-white bg-blue-900 border-2 border-sky-100">Editar</button>
</div>
@include('sweet-alert')