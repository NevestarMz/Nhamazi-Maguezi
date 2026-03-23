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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->nullable();// Coluna para o slug, que é a versão amigável do título
            $table->string('category');
            $table->string('author')->default('Eng. Pedro Nhamazy Chambisso'); // Autor padrão
            $table->text('desc'); // Pequeno resumo para o card
            $table->longText('content')->nullable(); // O texto completo do artigo
            $table->string('img_path'); // Caminho da imagem de capa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        
    }
};
