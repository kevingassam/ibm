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
        Schema::create('details_appartements', function (Blueprint $table) {
            $table->id();
            $table->string("reference")->nullable();
            $table->string("numero");
            $table->string("etage")->nullable();
            $table->string("type")->nullable();
            $table->string("piece")->nullable();
            $table->string("surface")->nullable();
            $table->string("plan")->nullable();
            $table->string("vocation")->nullable();
            $table->integer("chambres")->default(0);
            $table->enum("statut", ["disponible", "vendu"])->default("disponible");
            $table->string("surface_terrase")->nullable();
            $table->string("type_parking")->nullable();
            $table->unsignedBigInteger("appartement_id");
            $table->timestamps();
            $table->foreign("appartement_id")
                ->references("id")
                ->on("appartements")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_appartements');
    }
};
