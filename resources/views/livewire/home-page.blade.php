<div>
    @slot('header')
        Inicio
    @endslot
    <div class="flex flex-col items-center w-full p-2 m-2 bg-white rounded shadow-lg sm:flex-row" >
        <div id="functionaries-per-dependency-chart">
            
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> 
@include('charts.functionaries-per-dependency')