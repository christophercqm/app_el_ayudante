<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // ID del blog
            $table->string('titulo'); // Título del blog
            $table->string('slug')->unique(); // Slug único para URL amigable
            $table->text('descripcion'); // Descripción del blog
            $table->string('imagen')->nullable(); // URL de la imagen (puede ser nula)
            $table->string('enlace_blog')->nullable(); // Enlace del blog (opcional)
            $table->timestamps(); // Campos created_at y updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
