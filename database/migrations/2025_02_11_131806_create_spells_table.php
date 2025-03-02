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
        Schema::create('spells', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("school_id");
            $table->string('name');
            $table->integer('level');
            $table->text('description');
            $table->boolean('special_description');
            $table->string('range');
            $table->string('casting_time');
            $table->string('duration');
            $table->boolean('concentration');
            $table->boolean('ritual');
            $table->boolean('verbal');
            $table->boolean('somatic');
            $table->boolean('material');
            $table->string('material_components');
            
            $table->timestamps();

            $table->foreign("school_id")->references("id")->on("schools");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spells');
    }
};
