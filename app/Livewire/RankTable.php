<?php

namespace App\Livewire;

use App\Models\Rank;
use App\Livewire\Table;

class RankTable extends Table
{

    public function mount(){
        $this->columns = ['name'];
        $this->titles = ['Nombre'];
    }
    public function create(){

    }
    public function info($id){
        $this->redirectRoute('rank-info',['id'=> $id],
                            True, True);
    }
    public function render()
    {
        return view('livewire.rank-table', [
            'rows' => Rank::search($this->search, $this->columns)->paginate($this->perPage)
        ]);
    }
}
