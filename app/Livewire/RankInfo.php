<?php

namespace App\Livewire;
use App\Models\Rank;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Title;

#[Title('Informacion del rango')]
class RankInfo extends Component
{
    #[Url]
    public $id;
    public $rank;
    public function mount(){
        $this->rank = Rank::find($this->id);
    }
    public function edit(){

    }
    public function render()
    {
        return view('livewire.rank-info');
    }
}
