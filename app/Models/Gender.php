<?php

namespace App\Models;

use App\Livewire\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gender extends Model
{
    use HasFactory;
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public $timestamps = false;
    public function functionaries(): HasMany
    {
        return $this->HasMany(Functionary::class);
    }
}
