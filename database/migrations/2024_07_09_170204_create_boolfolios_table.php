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
        Schema::create('boolfolios', function (Blueprint $table) {
            $table->id();
            $table->string('autore');
            $table->string('nome');
            $table->text('descrizione');
            $table->date('inizio');
            $table->date('fine');
            $table->foreignId('category_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boolfolios');
    }
};
