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
            $table->decimal('prix', 13, 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('details_appartements', function (Blueprint $table) {
            $table->dropColumn('prix');
        });
    }
};
