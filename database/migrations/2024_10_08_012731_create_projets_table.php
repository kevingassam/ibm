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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("photo");
            $table->string("photos")->nullable();
            $table->text("description");
            $table->string("map")->nullable();
            $table->string("video")->nullable();
            $table->enum("statut",["en cours", "terminé"])->default("en cours");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
