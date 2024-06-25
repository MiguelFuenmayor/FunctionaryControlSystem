<?php

namespace App\Livewire;

use App\Models\Charge;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Title;

#[Title('Editar Cargo')]
class ChargeEdit extends Component
{   
    #[Url]
    public $id;
    public $name;
    public $charge;
    public function mount(){
        $this->charge = Charge::find($this->id);
        $this->name = $this->charge->name;
    }
    public function save(){
        $this->charge->create([
            'name' => $this->name,
        ]);
    }

    public function render()
    {
        return view('livewire.charge-edit');
    }
}
