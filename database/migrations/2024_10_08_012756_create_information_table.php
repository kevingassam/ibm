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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string("app_name")->default("IBM Projet");
            $table->string("email1")->nullable();
            $table->string("email2")->nullable();
            $table->string("tel1")->nullable();
            $table->string("tel2")->nullable();
            $table->string("logo")->nullable();
            $table->string("icon")->nullable();
            $table->string("adresse1")->nullable();
            $table->string("adresse2")->nullable();
            $table->text("text_footer")->nullable();
            $table->text("map")->nullable();
            $table->text("video")->nullable();

            $table->string("facebook")->nullable();
            $table->string("twitter")->nullable();
            $table->string("youtube")->nullable();
            $table->string("instagram")->nullable();
            $table->string("linkedin")->nullable();

            //images de couvertures
            $table->string("cover_about")->nullable();
            $table->string("cover_blog")->nullable();
            $table->string("cover_projet")->nullable();
            $table->string("cover_contact")->nullable();
            $table->string("cover_contact2")->nullable();

            //page informations
            $table->string("about_video")->nullable();
            $table->string("about_titre")->nullable();
            $table->text("about_texte1")->nullable();
            $table->text("about_texte2")->nullable();
            $table->text("about_texte3")->nullable();
            $table->text("about_photo1")->nullable();
            $table->text("about_photo2")->nullable();
            $table->text("about_photo3")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
