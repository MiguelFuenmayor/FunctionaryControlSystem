<?php

namespace App\Livewire;
use App\Models\Gender;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\URL;
use App\Models\Functionary as ModelsFunctionary;
#[Title('Datos del funcionario')]
class FunctionaryInfo extends Component
{   
    # TODO AGREGAR ARMA
    #[URL]
    public $id;
    public $charges;
    public $functionary;
    public $image;
    public function mount(){
        $this->functionary=ModelsFunctionary::find($this->id);
        $this->image = asset("storage/functionaries/R.JPEG");
        $this->charges = $this->functionary->charges()->get()->toArray();
        $charges = '';
        foreach($this->charges as $charge){
            $charges .='| ' .$charge['name'].' ';

        }
        $this->charges = $charges;
    }

    public function edit()
    {
        $this->redirectRoute("functionary-edit", $this->id,
                            True, True);
    }

    public function render()
    {
        return view('livewire.functionary-info', [
            'functionary'=> $this->functionary, 'image' => $this->image
        ]);
    }
}
