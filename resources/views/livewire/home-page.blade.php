<div>
    @slot('header')
        Inicio
    @endslot
    <div class="flex flex-col items-center w-full p-2 m-2 bg-white rounded shadow-lg sm:flex-row" >
        <div id="chart">
            
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> 
<script>
    
    var options = {
    chart: {
        type: 'bar'
    },
    series: [{
        name: 'sales',
        data: {{$data}}
    }],
    xaxis: {
        categories: [1992,1993,1994,1995,1996,1997,1998,1999]
    }
    }

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();
</script>
