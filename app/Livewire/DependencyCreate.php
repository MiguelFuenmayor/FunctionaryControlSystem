<?php

namespace App\Livewire;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Dependency;
use Livewire\Component;

class DependencyCreate extends Component
{   
    use LivewireAlert;
    public $name;
    public $description;

    public function create(){
        try {
            Dependency::create([
                'name'=> $this->name,
                'description' => $this->description
            ]);
        } catch (\Throwable $th) {
            $this->alert('error', 'Dependencia no agregada', [
                'position' => 'center',
                'timer' => '',
                'toast' => true,
                'width' => '600',
                'showConfirmButton' => true,
                'onConfirmed' => '',
                'confirmButtonText' => 'Ok',
                'text' => 'La operación ha fracasado. Codigo: ' . $th->errorInfo[2]]);
                return false;
        }
        $this->alert('success', 'Dependencia agregada', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'width' => '600',
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'confirmButtonText' => 'Ok',
            'text' => 'La operacion ha sido un exito']);
    }
    public function render()
    {
        return view('livewire.dependency-create');
    }
}
