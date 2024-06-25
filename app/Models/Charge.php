<?php

namespace App\Models;
use App\Livewire\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Charge extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable = ['name'];
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function functionaries(): BelongsToMany
    {
        return $this->belongsToMany(Functionary::class);
    }
}
