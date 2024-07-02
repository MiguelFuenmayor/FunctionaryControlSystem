<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Dependency;
use App\Models\Functionary;
use Livewire\Attributes\Url;

class DependencyInfo extends Component
{   
    #[URL]
    public $id;
    public $dependency;
    public $functionaries;
    public function mount(){
        $this->dependency = Dependency::find($this->id);
        $this->functionaries = Functionary::whereBelongsTo($this->dependency)->get();
    }
    public function render()
    {
        return view('livewire.dependency-info');
    }
    public function check($id){
        $this->redirectRoute('functionary-info', $id);
    }
    
    public function edit()
    {
        $this->redirectRoute('dependency-edit', ['id' => $this->id],
                            True, True);
    }
}

