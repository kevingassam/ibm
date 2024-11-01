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
            $table->string("surface_terrase")->nullable();
            $table->string("type_parking")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('details_appartements', function (Blueprint $table) {
            $table->dropColumn("surface_terrase");
            $table->dropColumn("type_parking");
        });
    }
};
