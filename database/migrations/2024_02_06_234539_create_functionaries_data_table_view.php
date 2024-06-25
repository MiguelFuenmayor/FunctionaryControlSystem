<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
            DB::statement("CREATE OR REPLACE VIEW functionaries_data_table 
            AS SELECT functionaries.id AS 'id', 
            functionaries.surnames AS 'surnames',
            functionaries.names AS 'names',
            functionaries.credential AS 'credential',
            functionaries.identity_document AS 'identity_document',
            weapons.weapon_type AS 'weapon',
            dependencies.name AS 'dependency',
            genders.name AS 'gender',
            ranks.name AS 'rank'
            FROM functionaries
            RIGHT JOIN ranks ON
            ranks.id = functionaries.rank_id
            RIGHT JOIN dependencies ON
            dependencies.id = functionaries.dependency_id
            RIGHT JOIN weapons ON
            weapons.id = functionaries.weapon_id
            INNER JOIN genders ON
            genders.id = functionaries.gender_id
            
            ");
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    DB::statement('DROP VIEW IF EXISTS functionaries_data_table');
    }
};
