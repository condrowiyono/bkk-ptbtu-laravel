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
        Schema::create('site_configs', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title');
            $table->string('hero_subtitle');
            $table->string('hero_image1');
            $table->string('hero_image2');
            $table->string('hero_image3');
            $table->string('about_title');
            $table->text('about_description');
            $table->string('about_image');
            $table->string('address_full');
            $table->string('social_facebook_link');
            $table->string('social_twitter_link');
            $table->string('social_instagram_link');
            $table->string('social_facebook');
            $table->string('social_twitter');
            $table->string('social_instagram');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_configs');
    }
};
