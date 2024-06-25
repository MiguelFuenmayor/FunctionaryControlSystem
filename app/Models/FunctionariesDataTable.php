<?php

namespace App\Models;
use App\livewire\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FunctionariesDataTable extends Model
{
    use HasFactory;
    protected $table = 'functionaries_data_table';
    public function surnames()
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function names()
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function dependency()
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function rank()
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function weaponType()
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function gender()
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
}
