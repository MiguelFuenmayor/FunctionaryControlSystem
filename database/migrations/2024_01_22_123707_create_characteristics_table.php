<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('characteristics', function (Blueprint $table) {
            $table->foreignId('functionary_id')->constrained();
            $table->string('height_in_cm',20);
            $table->string('hair_color',20);
            $table->string('skin_color',20);
            $table->string('weight_in_kg',25);
            $table->string('other_characteristics',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characteristics');
    }
};
