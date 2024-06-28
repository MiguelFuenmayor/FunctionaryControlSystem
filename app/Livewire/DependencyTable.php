<?php

namespace App\Livewire;
use App\Models\Dependency;
use App\Models\Functionary;
use Livewire\Attributes\Title;

#[Title('Dependencias')]
class DependencyTable extends Table
{
    public $functionaries_per_dependency = [];
    public function info($id){
        $this->redirectRoute('dependency-info',['id'=> $id], True,True);
    }
    public function create(){
        $this->redirectRoute('dependency-create',[], True, True);
    }

    public function mount(){
        $this->titles= ['Nombre', 'Descripcion'];
        $this->perPage=15;
        $this->columns=['name', 'description'];
        $this->search='';
        $this->page;

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
        return view('livewire.dependency-table', [
            'rows' => Dependency::search($this->search, $this->columns)
            ->paginate($this->perPage)
        ]);
    }
}
