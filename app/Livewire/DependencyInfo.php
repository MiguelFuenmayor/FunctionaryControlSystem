<?php

namespace App\Livewire;

use App\Models\Dependency;

use Livewire\Attributes\Url;
use Livewire\Component;

class DependencyInfo extends Component
{   
    #[URL]
    public $id;
    public $dependency;
    public function mount(){
        $this->dependency = Dependency::find($this->id);
    }
    public function render()
    {
        return view('livewire.dependency-info');
    }
    
    public function edit()
    {
        $this->redirectRoute('dependency-edit', ['id' => $this->id],
                            True, True);
    }
}

