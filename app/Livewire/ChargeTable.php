<?php

namespace App\Livewire;

use App\Models\Charge;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class ChargeTable extends Table
{
    public function info($id){
        $this->redirectRoute('charge-info',['id'=> $id], True,True);
    }
    public function create(){
        $this->redirectRoute('charge-create',[], True, True);
    }

    public function mount(){
        $this->perPage=15;
        $this->name = 'Cargo';
        $this->titles = ['Cargos'];
        $this->columns=['name'];
        $this->search='';
        $this->page;
    }
    public function render()
    {
        return view('livewire.charge-table', [
            'rows' => Charge::search($this->search, $this->columns)
            ->paginate($this->perPage)
        ]);
    }
}
