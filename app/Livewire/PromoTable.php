<?php

namespace App\Livewire;

use App\Models\Promo;
use Livewire\Attributes\Title;
use App\Livewire\Table;
#[Title('Promociones')]
class PromoTable extends Table
{

    public function mount(){
        $this->perPage=15;
        $this->columns=['name'];
        $this->search='';
        $this->page;
    }
    public function info($id){
        $this->redirectRoute('promo-info',['id'=> $id], True,True);
    }
    public function create(){
        $this->redirectRoute('promo-create',[], True, True);
    }
    public function render()
    {
        return view('livewire.promo-table', [
            'promos' => Promo::search($this->search, $this->columns)
            ->paginate($this->perPage)
        ]);
    }
}
