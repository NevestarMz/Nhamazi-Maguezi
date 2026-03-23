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
        Schema::table('articles', function (Blueprint $table) {
            // Adiciona a chave estrangeira
            $table->foreignId('writer_id')->nullable()->constrained('writers')->onDelete('set null');
            // Remove a coluna antiga de texto, se ela ainda existir
            if (Schema::hasColumn('articles', 'author')) {
                $table->dropColumn('author');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(['writer_id']);
            $table->dropColumn('writer_id');
            $table->string('author')->nullable();
        });
    }
};
