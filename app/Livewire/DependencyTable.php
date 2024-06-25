<?php

namespace App\Livewire;
use App\Models\Dependency;
use Livewire\Attributes\Title;

#[Title('Dependencias')]
class DependencyTable extends Table
{
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
    }

    public function render()
    {
        return view('livewire.dependency-table', [
            'rows' => Dependency::search($this->search, $this->columns)
            ->paginate($this->perPage)
        ]);
    }
}
