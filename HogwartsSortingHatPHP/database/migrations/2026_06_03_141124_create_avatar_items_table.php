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
        Schema::create('avatar_items', function (Blueprint $table) {
            $table->id();
            $table->enum('category', ['hair', 'face', 'clothing', 'accessory']);
            $table->string('name');
            $table->string('image_url');
            $table->boolean('is_premium');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avatar_items');
    }
};
