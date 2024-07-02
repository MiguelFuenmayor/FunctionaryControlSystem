<?php

namespace App\Livewire;

use Livewire\Component;

class PostList extends Component
{
    public $elements;
    public function mount(){
        $this->elements = [1,1,1,1,1,1,1];
    }
    public function render()
    {
        return view('livewire.post-list');
    }
}
