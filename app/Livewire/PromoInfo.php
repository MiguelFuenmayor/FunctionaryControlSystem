<?php

namespace App\Livewire;

use App\Models\Promo;
use Livewire\Attributes\Url;
use Livewire\Component;

class PromoInfo extends Component
{
    #[URL]
    public $id;
    public $promo;
    public function edit(){
        $this->redirectRoute('promo-edit', [$this->id],
                            True, True);
    }
    public function mount(){
        $this->promo = Promo::find($this->id);
    }

    public function render()
    {
        return view('livewire.promo-info');
    }
}
