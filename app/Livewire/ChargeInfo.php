<?php

namespace App\Livewire;

use App\Models\Charge;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Title;
#[Title('Informacion del cargo')]
class ChargeInfo extends Component
{
    #[URL]
    public $id;
    public $charge;
    public function edit(){
        $this->redirectRoute('charge-edit', [$this->id],
                            True, True);
    }
    public function mount(){
        $this->charge = Charge::find($this->id);
    }
    public function render()
    {
        return view('livewire.charge-info');
    }
}
