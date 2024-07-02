
<div>
    @slot('header')
        Inicio
    @endslot
    <div class="items-center w-full p-2 m-2 bg-white rounded shadow-lg sm:flex-row">
        <h1 class="mt-4 mb-6 ml-6 text-xl"> GRAFICOS </h1>
    <div class="flex" >
        <div id="functionaries-per-dependency-chart"></div>
        <div id="functionaries-per-rank-chart"></div>
        <div id="functionaries-per-promo-chart"></div>
        <div id="functionaries-per-charge-chart"></div>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> 
@include('charts.functionaries-per-dependency')
@include('charts.functionaries-per-rank')
@include('charts.functionaries-per-promo')
@include('charts.functionaries-per-charge')


