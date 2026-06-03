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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
        // Um post obrigatoriamente tem um autor (user_id não pode ser nulo)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        // Se house_id for nulo, o post é público. Se não, é exclusivo da casa.
            $table->foreignId('house_id')->nullable()->constrained()->onDelete('set null');
            $table->string('title');
            $table->string('slug')->unique(); // URL amigável e única
            $table->longText('content');      // Corpo do texto (longText para artigos grandes)
            $table->string('image_url')->nullable(); // Imagem de capa opcional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
