<?php

namespace App\Livewire;
use App\Models\Rank;
use App\Models\Promo;
use App\Models\Charge;
use Livewire\Component;
use App\Models\Dependency;
use App\Models\Functionary;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use App\Charts\functionaries_per_dependency;


class HomePage extends Component
{
    public $functionaries_per_dependency;
    public $functionaries_per_rank;
    public $functionaries_per_promo;
    public $functionaries_per_charge;
    protected $listeners= ['look'];
    public $value = 0;
    public function mount(){ 
        //GRAFICO DE FUNCIONARIOS POR DEPENDENCIA
            Utilities::fillChartData(Dependency::class, $this->functionaries_per_dependency);
        //GRAFICO DE FUNCIONARIOS POR RANGO
            Utilities::fillChartData(Rank::class, $this->functionaries_per_rank);
        //GRAFICO DE FUNCIONARIOS POR PROMO
            Utilities::fillChartData(Promo::class, $this->functionaries_per_promo);
        //GRAFICO DE FUNCIONARIES POR CHARGE
            Utilities::fillChartData(Charge::class, $this->functionaries_per_charge);
    }
    public function look($id, $chart){
        Utilities::look($id,$chart);
        // preg_match('/dependency/', $chart, $main_axis);;
        // $this->redirectRoute($main_axis[0].'-info',($id[0]+1));
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
