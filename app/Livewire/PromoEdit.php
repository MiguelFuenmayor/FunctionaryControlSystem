<?php

namespace App\Livewire;
use App\Models\Promo;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Title;

#[Title('Editando promo')]
class PromoEdit extends Component
{   #[Url]
    public $id;
    public $name;
    public $promo;
    public function mount(){
        $this->promo = Promo::find($this->id);
        $this->name = $this->promo->name;
    }
    public function save(){
        $this->promo->create([
            'name' => $this->name,
        ]);
    }
    public function render()
    {
        return view('livewire.promo-edit');
    }
}
