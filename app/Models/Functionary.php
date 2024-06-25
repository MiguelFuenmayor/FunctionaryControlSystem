<?php

namespace App\Models;

use App\Livewire\Model;
use App\Models\Rank;
use App\Models\Image;
use App\Models\Promo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Functionary extends Model
{
    use HasFactory;
    public $fillable = ['names','surnames','age','status_id',
                        'dependency_id', 'gender_id', 'rank_id',
                        'promo_id', 'start_date',
                        'credential','identity_document', 'id'];

    protected function names(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    protected function surnames(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }
    public function gender():BelongsTo
    {
        return $this->BelongsTo(Gender::class);
    }
    public function promo(): BelongsTo
    {
        return $this->BelongsTo(Promo::class);
    }

    public function rank(): BelongsTo
    {
        return $this->BelongsTo(Rank::class);
    }

    public function weapon(): BelongsTo
    {
        return $this->belongsTo(Weapon::class);
    }
    public function status(): BelongsTo
    {
        return $this->BelongsTo(Status::class);
    }

    public function dependency(): BelongsTo
    {
        return $this->BelongsTo(Dependency::class);
    }

    public function size(): HasOne
    {
        return $this->hasOne(Size::class);
    }

    public function charges(): BelongsToMany
    {
        return $this->belongsToMany(Charge::class);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function characteristic(): HasOne
    {
        return $this->hasOne(Characteristic::class);
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function getGender(){
        return Gender::find($this->gender_id,['name'])->name;
        
    }
    // public function getThis($camp){
    //     return $camp::find($this->$camp.'_id',['name'])->name;
    // }

    public function getUser(){
        return User::find($this->user_id,['email'])->email;
    }
    public function getPromo(){
        return Promo::find($this->promo_id,['name'])->name;
    }
    public function getStatus(){
        return Status::find($this->status_id,['name'])->name;
    }
    public function getRank(){
        return Rank::find($this->rank_id,['name'])->name;
    }
    public function getDependency(){
        return Dependency::find($this->dependency_id,['name'])->name;
    }

    public static function table()
    {
       $functionaries = Functionary::rightJoin('dependencies',
            'dependencies.id',
            '=', 
            'functionaries.dependency_id')
        ->rightJoin('weapons',
            'weapons.id',
            '=',
            'functionaries.weapon_id')
        ->rightJoin('genders',
            'genders.id',
            '=',
            'functionaries.gender_id')
        ->rightJoin('ranks',
            'ranks.id',
            '=',
            'functionaries.rank_id')
        ->select('functionaries.names as names',
            'functionaries.surnames as surnames',
            'functionaries.identity_document as identity_document',
            'functionaries.credential as credential',
            'dependencies.name as dependency',
            'genders.name as gender', 
            'ranks.name as rank', 
            'weapons.weapon_type AS weapon')->get();
        return $functionaries;
    }

}
