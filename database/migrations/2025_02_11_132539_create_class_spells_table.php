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
        Schema::create('class_spells', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("class_id");
            $table->unsignedBigInteger("spell_id");
            $table->timestamps();

            $table->foreign("class_id")->references("id")->on("character_classes");
            $table->foreign("spell_id")->references("id")->on("spells");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_spells');
    }
};
