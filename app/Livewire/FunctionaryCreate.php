<?php

namespace App\Livewire;

use App\Models\Functionary;
use App\Models\Promo;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Rank;
use App\Models\Charge;
use App\Models\Dependency;
use App\Models\Gender;
use App\Models\Status;

use Livewire\Attributes\Validate;

#[Title('Añadiendo funcionario')]
class FunctionaryCreate extends Component
{   
    use LivewireAlert;
    #[Validate('required', message:'Debe ingresar un nombre')]
    #[Validate('min:3', message: 'Ingrese un nombre con mas de 3 caracteres')]
    public $names;
    #[Validate('required', message:'Debe ingresar un apellido')]
    #[Validate('min:3', message: 'Ingrese un apellido con mas de 3 caracteres')]
    public $surnames;
    #[Validate('required', message:'Debe ingresar una edad')]
    #[validate('regex:/[0-9]{2}/', message: 'Ingrese una edad valida')]
    public $age;
    #[Validate('regex:/[^0]+/', message:'Seleccione un genero')]
    public $gender_id;
    #[Validate('required',message:'La cedula es requerida')]
    #[Validate('regex:/[0-9]{10}/', message: 'Ingrese una cedula de diez(10) digitos, solo numeros')]
    #[Validate('max:7', message: 'Ingrese una cedula de siete(7) digitos, solo numeros')]
    public $identity_document;
    #[Validate('required', message: 'Ingrese una credencial, por favor')]
    #[Validate('regex:/[0-9]{9}/', message: 'Ingrese una credencial de nueve(9) digitos, solo numeros')]
    #[Validate('max:9', message: 'Ingrese una credencial de nueve(9) digitos, solo numeros')]
    public $credential;
    #[Validate('required')]
    public $start_date;
    // #[Validate('required')]
    // public $end_date;
    #[Validate('required')]
    #[Validate('regex:/[^0]+/')]
    public $charge_id;
    
    #[Validate('regex:/[^0]+/')]
    public $promo_id;
    #[Validate('regex:/[^0]+/')]
    public $status_id;
    #[Validate('regex:/[^0]+/')]
    public $rank_id;
    #[Validate('regex:/[^0]+/')]
    public $dependency_id;    
    public $data;
    public $functionary;
    public function mount()
    {
        $this->gender_id=0;
        $this->charge_id[]=0;
        $this->promo_id=0;
        $this->dependency_id=0;
        $this->rank_id=0;
        $this->promo_id=0;
        $this->status_id=0;
        $this->functionary = [
            'surnames' => null,
            'names' => null,
            'age' => null,
            'gender_id' => null,
            'identity_document' => null,
            'credential' => null,
            'start_date' => null,
            'promo_id' => null,
            'status_id' => null,
            'rank_id' => null,
            'dependency_id' => null
        ];

        $this->data = [
            'genders' => Gender::all(),
            'promos' => Promo::all(),
            'ranks' => Rank::all(),
            'charges' => Charge::all(),
            'dependencies' => Dependency::all(),
            'statuses' => Status::all()
        ];
    }


    public function render()
    {
        return view('livewire.functionary-create', ['data' => $this->data, 'names' => $this->names, 'functionary'=>$this->functionary]);
    }

    public function save()
    {   $this->validate();
        $functionary = new Functionary;
        
        foreach($this->functionary as $property => $value){
            $functionary->$property =$this->$property;
        }

        try {
            $r = true;
            $functionary->save();
            $functionary->charges()->sync($this->charge_id);
            
        } catch (\Throwable $th) {
            $r = false;
            $this->alert('error', 'Funcionario no agregado', [
                'position' => 'center',
                'timer' => '',
                'toast' => true,
                'width' => '600',
                'showConfirmButton' => true,
                'onConfirmed' => '',
                'confirmButtonText' => 'Ok',
                'text' => 'La operación ha fracasado. Codigo: ' . $th->errorInfo[2]]);
            }
           
        if($r){ 
            $this->alert('success', 'Funcionario agregado', [
                'position' => 'center',
                'timer' => '3000',
                'toast' => true,
                'width' => '400',
                'text' => 'La operación ha sido un exito',
                'showConfirmButton' => true,
                'onConfirmed' => '',
                'confirmButtonText' => 'OK',
               ]);
        }
      
            
            
       
    // end save function       
    }
}
