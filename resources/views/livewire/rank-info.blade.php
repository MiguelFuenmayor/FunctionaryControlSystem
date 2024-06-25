<div class="flex flex-col items-center">
    @slot('header')
        DATOS DEL RANGO
    @endslot
    <div class="flex flex-col items-center w-full p-2 m-2 bg-white rounded shadow-lg sm:flex-row">
        <h class="w-full text-xl "> {{$rank->name}} <h>
        <hr class="h-px m-2 mx-2 bg-gray-200 border-0 dark:bg-gray-700">
        <!-- AQUI UN GRAFICO -->
    </div>  
   
    @include('sweet-alert')
</div>
