<div>
  <section class="mt-10">
      <div class="max-w-screen-xl px-4 mx-auto lg:px-12">
          <!-- Start coding here -->
      
          <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
              <div class="flex items-center justify-between p-4 d">
                  <div class="flex">
                      <div class="relative w-full">
                          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                              <svg aria-hidden="true" class="w-5 h-5 text-gray-500"
                                  fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd" />
                              </svg>
                          </div>
                          <input
                              wire:model.live='search'
                            type="text"
                              class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg pr-100 bg-gray-50 focus:ring-primary-500 focus:border-primary-500 "
                              placeholder="Search" required="">
                      </div>
                  </div>
                  
                  <a wire:click.prevent='create'>
                      <button class="px-5 py-2 text-white bg-red-600">Anadir {{$name}}</button>
                  </a>
                  {{-- <div class="flex space-x-3">
                      <div class="flex items-center space-x-3">
                          <label class="w-40 text-sm font-medium text-gray-900">User Type :</label>
                          <select 
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                              <option value="">All</option>
                              <option value="0">User</option>
                              <option value="1">Admin</option>
                          </select>
                      </div>
                  </div> --}}
                  {{-- <div class="flex space-x-3">
                      <div x-data="{open : false}" class="flex items-center space-x-3">
                          <label @click= "open = ! open"  class="bg-gray-50 border border-gray-300  rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5  w-40 text-sm font-medium text-gray-900">Buscar en:</label>
                          <span x-show="open" @click.away="open = false" @close.stop="open = false"
                              class="absolute  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                              
                              <input type="checkbox" name="equis" id="equis">
                              <label >equis </label>
                      </span>
                      </div>
                  </div> --}}
              </div>
              <div class="overflow-x-auto">
                  <table class="w-full text-sm text-left text-gray-500 ">
                      <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                          <tr>
                              @foreach ($titles as $title )
                              <th scope="col" class="px-4 py-3">{{$title}}</th>
                              @endforeach
                              <th scope="col" class="px-4 py-3">
                                  <span class="sr-only">Actions</span>
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                    
                      @foreach ($rows as $row)
                      <tr>
                        @foreach ($columns as $column)
                          <td scope="row"
                          class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                          {{$row->$column}}
                          </td>
                        @endforeach
                          <td class="flex items-center justify-end px-4 py-3">
                              <a wire:click='info({{$row->id}})'>
                                  <button class="px-5 py-2 text-white bg-blue-600">Info</button>
                              </a>
                          </td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
              </div>

              <div class="px-3 py-4">
                  <div class="flex ">
                      <div class="flex items-center mb-3 space-x-4">
                          <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                          <select wire:model.live='perPage'
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                              <option value="5">5</option>                                    
                              <option value="10">10</option>
                              <option value="15">15</option>
                              <option value="20">20</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                          </select>
                      </div>
                  </div>
                      {{$rows->links()}}
              </div>
          </div>
      </div>
  </section>

</div>