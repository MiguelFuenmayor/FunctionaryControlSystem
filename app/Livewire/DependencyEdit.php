<?php

namespace App\Livewire;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Dependency;
use Livewire\Attributes\Url;
// name, description
class DependencyEdit extends Component
{   
    use LivewireAlert;
    #[URL]
    public $id;
    public $dependency;
    public $name;
    public $description;

    public function save(){
        $this->dependency->description = $this->description;
        $this->dependency->name = $this->name;
        $this->dependency->save();
        $this->alert('success', 'Dependencia editada', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'width' => '300',
            'text' => 'La operacion fue un exito',
        ]);
    }
    public function mount(){
        $this->dependency = Dependency::find($this->id);
        $this->name = $this->dependency->name;
        $this->description = $this->dependency->description;
    }
    public function render()
    {
        return view('livewire.dependency-edit');
    }
}
