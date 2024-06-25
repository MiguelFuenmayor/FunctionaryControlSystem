<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use App\Models\FunctionariesDataTable;

#[Title('Tabla de Funcionarios')]
class FunctionaryTable extends Table
{
    public function mount(){
        $this->titles = ['Nombres', 'Apellidos', 'Rango', 'Dependencia', 'Arma', 'Sexo', 'Cedula', 'Credencial'];
        $this->perPage=15;
        $this->columns=['surnames','names','rank','dependency','weapon','gender','identity_document','credential'];
        $this->search='';
        $this->page;
        $this->name = 'Funcionario';
    }

    public function info($id){
        $this->redirectRoute('functionary-info',['id'=>$id],
                            True, True);
    }
    public function create(){
        $this->redirectRoute('functionary-create', [],
                            True, True);
    }
    public function render()
    {   
        return view('livewire.functionary-table',[
            'rows' => FunctionariesDataTable::search($this->search,$this->columns)->paginate($this->perPage)
        ]);
    }
}
