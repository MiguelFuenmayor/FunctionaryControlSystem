<script>
  var FRoptions = {
        title: {
          text: "Funcionarios por rango"
        },
        series: [{
          name : "Funcionarios",
        data: [{{$functionaries_per_rank[1]}}]
      }],
        chart: {
        id: 'functionaries-per-rank',
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
          @foreach ($functionaries_per_rank[0] as $name)

            '{{$name}}',
          @endforeach
        ],
      }
      };

      var functionariesPerRankChart = new ApexCharts(document.querySelector("#functionaries-per-rank-chart"), FRoptions);
      functionariesPerRankChart.render();

</script>