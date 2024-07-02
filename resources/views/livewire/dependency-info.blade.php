<div class="flex flex-col items-center">
    @slot('header')
    {{$dependency->name}}
    @endslot
    <div class="grid m-3 grid-flow-col gap-4 grid-cols-8 grid-rows-8">
        <div class="text-5xl">  </div>
        <div class="items-center p-2 m-2 bg-white rounded row-span-2 shadow-lg row-start-1 col-start-1 col-span-8">{{$dependency->description}}</div>
        <!-- LISTA DE FUNCTIONARIES -->
        <div class="flex flex-col p-2 pl-3 overflow-auto row-start-3 col-span-2  col-start-1 row-span-4 bg-white rounded shadow-lg ">
          <p class=""> FUNCIONARIOS EN LA DEPENDENCIA </p>
          <div class="flex-grow h-px bg-gray-400"></div>
          <ul class="h-90">
            @foreach ($functionaries as $functionary)
              <li wire:click='check({{$functionary->id}})' class="flex text-base cursor-pointer text-body-color dark:text-dark-6">
                  <span class="text-primary mr-2.5 mt-0.5">
                     <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                           d="M18 9.5L11.5312 2.9375C11.25 2.65625 10.8125 2.65625 10.5312 2.9375C10.25 3.21875 10.25 3.65625 10.5312 3.9375L15.7812 9.28125H2.5C2.125 9.28125 1.8125 9.59375 1.8125 9.96875C1.8125 10.3438 2.125 10.6875 2.5 10.6875H15.8437L10.5312 16.0938C10.25 16.375 10.25 16.8125 10.5312 17.0938C10.6562 17.2188 10.8437 17.2812 11.0312 17.2812C11.2187 17.2812 11.4062 17.2188 11.5312 17.0625L18 10.5C18.2812 10.2187 18.2812 9.78125 18 9.5Z"
                           fill="currentColor"
                           />
                     </svg>
                  </span>
                {{$functionary->surnames .' '.$functionary->names }}</li>
            @endforeach
          </ul>
        </div>
        <div class="flex flex-col w-64 p-2 m-2 overflow-auto row-start-3 col-start-3 row-span-4 col-span-4 bg-white rounded shadow-lg h-76">
        </div>
    </div>  
    <div class="flex flex-col items-center p-2 m-2 bg-white rounded shadow-lg w-fit sm:flex-row">
        <button wire:click="edit" class="p-2 px-4 text-white bg-blue-900 border-2 border-sky-100">Editar</button>
    </div>
    @include('sweet-alert')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</div>
