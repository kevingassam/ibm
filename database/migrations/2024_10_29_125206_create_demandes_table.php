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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->nullable();
            $table->string("prenom")->nullable();
            $table->string("email")->nullable();
            $table->string("telephone")->nullable();
            $table->text("message")->nullable();
            $table->unsignedBigInteger("projet_id");
            $table->timestamps();


            //relation
            $table->foreign("projet_id")
                ->references("id")
                ->on("projets")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
