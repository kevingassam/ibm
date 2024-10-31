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
        Schema::table('information', function (Blueprint $table) {
            $table->text("about_photo1")->nullable();
            $table->text("about_photo2")->nullable();
            $table->text("about_photo3")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('information', function (Blueprint $table) {
            $table->dropColumn(["about_photo1", "about_photo2", "about_photo3"]);
        });
    }
};
