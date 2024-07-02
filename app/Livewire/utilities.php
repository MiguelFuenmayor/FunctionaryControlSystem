<?php 
namespace App\Livewire;
use App\Models\Charge;
use App\Models\Functionary;

class Utilities {
    // CHART RELATED FUNCTIONS
  public static function fillChartData($class, &$property){
    $rows = $class::all()->toArray();
    $property[0] = array_column($rows, 'name');
    $property[1] = Utilities::ImplodeFunctionaries($rows, $class);
}
  
public static function ImplodeFunctionaries($table, $class){
    return implode(',', 
    Utilities::getRelatedFunctionaries(Utilities::getTableIds($table), $class));
}
public static function getTableIds($table){
    return array_column($table, 'id');
}
public static function getRelatedFunctionaries($table, $class){
    $data = [];
    if($class == Charge::class){
      foreach($table as $id){
        $functionaries = Charge::find($id)->functionaries()->get();
        $data[] = count($functionaries);
      }
    }else{
        foreach($table as $id){
          $functionaries = Functionary::whereBelongsTo($class::find($id))->get();
          $data[] = count($functionaries);
        }
    }
    return $data;
}
public static function look($id, $chart){
  preg_match('/(dependency|rank|charge|functionary|promo|gender)/', $chart, $main_axis);;
  redirect(route($main_axis[0].'-info',($id[0]+1)));
}
}