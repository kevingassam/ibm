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
        Schema::table('details_appartements', function (Blueprint $table) {
            $table->id();
            $table->string("reference");
            $table->string("vocation")->nullable();
            $table->integer("chambres")->default(0);
            $table->enum("statut",["disponible","vendu"])->default("disponible");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
