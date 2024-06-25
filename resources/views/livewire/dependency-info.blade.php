<div class="flex flex-col items-center">
    @slot('header')
        DATOS DE LA DEPENDENCIA
    @endslot
    <div class="flex flex-col items-center w-full p-2 m-2 bg-white rounded shadow-lg sm:flex-row">
        <h class="w-full text-xl "> {{$dependency->name}} <h>
        <hr class="h-px m-2 mx-2 bg-gray-200 border-0 dark:bg-gray-700">
        <p>{{$dependency->description}}</p>
        <!-- AQUI UN GRAFICO -->
        <div class="w-96">
        <canvas id="graph"></canvas>
        </div>
    </div>  
    <div class="flex flex-col items-center p-2 m-2 bg-white rounded shadow-lg w-fit sm:flex-row">
        <button wire:click="edit" class="p-2 px-4 text-white bg-blue-900 border-2 border-sky-100">Editar</button>
    </div>
    @include('sweet-alert')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('graph');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
              label: '# of Votes',
              data: [12, 10, 3, 5, 2, 3],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
    </script>
</div>
