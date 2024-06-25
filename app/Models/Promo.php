<?php

namespace App\Models;
use App\Livewire\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promo extends Model
{
    use HasFactory;
    public $fillable = ['name'];

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
    public $timestamps = false;
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function functionaries(): HasMany
    {
        return $this->HasMany(Functionary::class);
    }
}
