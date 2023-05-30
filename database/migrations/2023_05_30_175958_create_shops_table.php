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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('shop_name');
            $table->string('shop_description');
            $table->string('shop_picture_path');
            $table->string('shop_banne_pathr');
            $table->string('shop_phone_number');
            $table->string('shop_email');
            $table->time(('shop_opening_time'));
            $table->time(('shop_closing_time'));
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();;
            $table->string('twitter_link')->nullable();;
            $table->string('youtube_link')->nullable();;
            $table->string('tiktok_link')->nullable();;
            $table->foreignId('owner')->nullable()
                ->constrained('users', 'id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
