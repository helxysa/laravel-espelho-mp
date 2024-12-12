<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('eventos', function (Blueprint $table) {
        $table->id();
        $table->string('titulo')->nullable();
        $table->string('tipo');
        $table->date('periodo_inicio');
        $table->date('periodo_fim');
        $table->foreignId('promotor_titular_id')->constrained('promotores');
        $table->foreignId('promotor_designado_id')->constrained('promotores');
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};