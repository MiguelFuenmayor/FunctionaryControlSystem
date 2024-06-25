<?php

namespace App\Livewire;
use App\Charts\functionaries_per_dependency;
use Livewire\Component;
use App\Models\Dependency;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;


class HomePage extends Component
{
    public $functionaries_per_dependency;
    public $data = [];
    public function mount(){ 
        // aprendiendo: pasa los datos como string equisde
        $this->data = '[33,44,55,66,77,88,11,22]';
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
