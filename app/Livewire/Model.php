<?php
namespace App\Livewire;
use Illuminate\Database\Eloquent\Model as EloquentModel;

abstract class Model extends EloquentModel{
  public function scopeSearch($query, $value,$columns)
  { 
      # FOREACH START
      foreach($columns as $key => $column){
          #IF FOR COLUMNS
          if($key==0){
              $query->where(
                  "{$column}",
                  'like',
                  "%{$value}%");
          }
          else{
              $query->orWhere(
                  "{$column}",
                  'like',
                  "%{$value}%");
          }#END INF
      } #END FOREACH
  }# FUNCTION END
}