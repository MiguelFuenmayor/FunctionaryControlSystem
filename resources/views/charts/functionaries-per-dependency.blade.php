<script>
  // FUNCTIONARIEs PER DEPENDENCY CHART
  var options = {
        title: {
          text: "Funcionarios por dependencia"
        },
        series: [{
          name : "Funcionarios",
        data: [{{$functionaries_per_dependency[1]}}]
      }],
        chart: {
        id: 'Functionaries-per-dependency',
        type: 'bar',
        height: 350,
        events: {
        dataPointSelection: (event, chartContext, opts)=>{
          console.log(opts.w.globals);
          @this.look(opts.selectedDataPoints[0], opts.w.globals.chartID)
        }
      }
      },
      plotOptions: {
        bar: {
          borderRadius: 4,
          borderRadiusApplication: 'end',
          horizontal: true,
        }
      },
      dataLabels: {
        enabled: false
      },
      xaxis: {
        categories: [
          @foreach ($functionaries_per_dependency[0] as $name)

            '{{$name}}',
          @endforeach
        ],
      },
      };

      var Chart = new ApexCharts(document.querySelector("#functionaries-per-dependency-chart"), options);
      Chart.render();

</script>