<?php

namespace App\Livewire;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Rank;
use App\Models\Promo;
use App\Models\Charge;
use App\Models\Gender;
use App\Models\Status;
use App\Models\Weapon;
use Livewire\Component;
use App\Models\Dependency;
use App\Models\Functionary;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\URL;
use App\Models\Functionary as ModelsFunctionary;

#[Title('Editar Funcionario')]
class FunctionaryEdit extends Component
{
    use LivewireAlert;
    # TODO AGREGAR EDICION DE ARMA Y MENSAJE DE EXITO O FALLO
    #[URL]
    public $id;
    public $functionary;
    public $names;
    public $surnames;
    public $age;
    public $weapon;
    public $gender;
    public $identity_document;
    public $credential;
    public $promo;
    public $status;
    public $rank;
    public $dependency;
    public $image;
    public $charges;

    public function save(){
        $this->alert('info', 'Hello!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
           ]); 
        $this->functionary->names =
        $this->names;

        $this->functionary->surnames =
        $this->surnames;

        $this->functionary->age = 
        $this->age;

        $this->functionary->gender_id = 
        $this->gender;

        $this->functionary->identity_document = 
        $this->identity_document;

        $this->functionary->credential = 
        $this->credential;

        $this->functionary->promo_id = 
        $this->promo;

        $this->functionary->status_id = 
        $this->status;

        $this->functionary->rank_id = 
        $this->rank;

        $this->functionary->weapon_id = 
        $this->weapon;

        $this->functionary->dependency_id = 
        $this->dependency;

        $this->functionary->charges()->sync($this->charges);
        
        $result = 
        $this->functionary->save() ? 'Funcionario editado!' : 'Ha ocurrido un error...';
        session()->flash('message', $result);
       ($result == 'Funcionario editado!') 
        ?
        $this->alert('success', 'Funcionario editado', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'width' => '300',
            'text' => 'La operacion fue un exito',
           ])
            
        :
        $this->alert('error', 'Funcionario no editado', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'width' => '300',
            'text' => 'La operación ha fracasado',
           ]);
                 
        
    }

    public function mount(){
        # TODO SINCRONIZADO, FALTA GUARDAR CAMBIOS
        $this->functionary=ModelsFunctionary::find($this->id);
        $this->names = $this->functionary->names;
        $this->surnames = $this->functionary->surnames;
        $this->age = $this->functionary->age;
        $this->gender = $this->functionary->gender_id;
        $this->identity_document = $this->functionary->identity_document;
        $this->credential = $this->functionary->credential;
        $this->weapon = $this->functionary->weapon_id;
        $this->promo = $this->functionary->promo_id;
        $this->status = $this->functionary->status_id;
        $this->rank = $this->functionary->rank_id;
        $this->dependency = $this->functionary->dependency_id;
        $this->image = asset("storage/functionaries/R.JPEG");
        # dealing with the charges
        $this->charges = $this->functionary->charges()->get(['charge_id'])->toArray();
        $charges= [];
        foreach($this->charges as $key => $data){
            $charges[] = $this->charges[$key]['charge_id'];}
        $this->charges = $charges;
        
    }

    public function cancel(){
        $this->redirectRoute('functionary-info', $this->id,
                            True, True);
    }

    public function render()
    {
        return view('livewire.functionary-edit',[
    'statuses' => Status::all(), 
    'promos' => Promo::all(),   
    'genders' => Gender::all(),
    'ranks' => Rank::all(),
    'dependencies' => Dependency::all(),
    'all_charges'=> Charge::all()->toArray(),
    'weapons' => Weapon::where('id','=', $this->weapon)
    ->orWhereNotIn('id', Functionary::select('weapon_id'))->get()
    ]);
    }
}
