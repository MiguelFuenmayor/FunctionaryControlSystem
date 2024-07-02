<script>
  var options = {
        title: {
          text: "Funcionarios por promo"
        },
        series: [{
          name : "Funcionarios",
        data: [{{$functionaries_per_promo[1]}}]
      }],
        chart: {
        id: 'functionaries-per-promo',
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
          @foreach ($functionaries_per_promo[0] as $name)

            '{{$name}}',
          @endforeach
        ],
      }
      };

      var Chart = new ApexCharts(document.querySelector("#functionaries-per-promo-chart"), options);
      Chart.render();
</script>