<?php
namespace App\Livewire;
use Livewire\Component;
use Livewire\WithPagination;

abstract class Table extends Component
{
  use WithPagination;

  public $name = 'name';
  public $titles = ['name'];
  public $perPage;
  public $columns;
  public $new_columns;
  public $search;
  public $page;

  abstract public function info($id);
  abstract public function create();
  public function columns(){
    array_push($this->column,$this->new_columns);
}
public function updatedSearch()
{
    $this->resetPage();
}
public function mount(){
  $this->perPage=15;
  $this->columns=['name', 'description'];
  $this->search='';
  $this->page;
}
}
