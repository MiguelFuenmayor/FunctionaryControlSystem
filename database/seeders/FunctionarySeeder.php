<?php

namespace Database\Seeders;

use App\Models\Size;
use App\Models\User;
use App\Models\Image;
use App\Models\Charge;
use App\Models\Weapon;
use App\Models\Address;
use App\Models\Functionary;
use App\Models\Characteristic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FunctionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        foreach(User::all() as $id){
            $functionaries = Functionary::factory(1)->create(
                [
                    "user_id"=> $id->id
                ]
            );
        }
        $functionaries=Functionary::all();
        foreach ($functionaries as $functionary) {
            $functionary->weapon_id = $functionary->id;
            $functionary->save();
            Address::factory(1)->create(
                [
                    "functionary_id" => $functionary->id
                ]
            );
            Characteristic::factory(1)->create(
                [
                    "functionary_id" => $functionary->id
                ]
            );

            Size::factory(1)->create(
                [
                    "functionary_id" => $functionary->id
                ]
            );
        
            $charge = random_int(1, 4);
            $functionary->charges()->attach($charge);  
            }
            
        }
    }

