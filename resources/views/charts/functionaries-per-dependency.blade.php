<script>
  // FUNCTIONARIEs PER DEPENDENCY CHART
  var FDoptions = {
        title: {
          text: "Funcionarios por dependencia"
        },
        series: [{
          name : "Funcionarios",
        data: [{{$functionaries_per_dependency[1]}}]
      }],
        chart: {
        type: 'bar',
        height: 350
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
          @foreach ($functionaries_per_dependency[0] as $dependency)

            '{{$dependency}}',
          @endforeach
        ],
      }
      };

      var functionariesPerDependencyChart = new ApexCharts(document.querySelector("#functionaries-per-dependency-chart"), FDoptions);
      functionariesPerDependencyChart.render();

</script>