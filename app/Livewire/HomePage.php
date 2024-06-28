<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Dependency;
use App\Models\Functionary;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use App\Charts\functionaries_per_dependency;


class HomePage extends Component
{
    public $functionaries_per_dependency;
    public function mount(){ 
        //GRAFICO DE FUNCIONARIOS POR DEPENDENCIA
            // aprendiendo: pasa los arrays de numeros como string equisde
            $dependencies = Dependency::all()->toArray();
            //nombres de las dependencias
            $this->functionaries_per_dependency[0]=array_column($dependencies, 'name');
            $data = [];
            foreach(array_column($dependencies,'id') as $dependency_id){
                $functionaries = Functionary::whereBelongsTo(Dependency::find($dependency_id))->get();
                $data[] = count($functionaries);
            }
            $this->functionaries_per_dependency[1] = implode(',', $data);        
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
