<div>
    @slot('header')
        TABLA DE DEPENDENCIAS
    @endslot
    
    @include('components.table')
    <div class="relative mx-10 mt-6 overflow-hidden bg-white shadow-md sm:rounded-lg">
        <div id='functionaries-per-dependency-chart' class="m-6  w-cover"></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> 
@include('charts.functionaries-per-dependency')