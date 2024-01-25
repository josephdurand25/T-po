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
        Schema::create('alimentations', function (Blueprint $table) {
            $table->id();
            $table->enum('type_aliment', ['démarage', 'croissance','finition']);
            $table->smallInteger('nbre_sac');
            $table->Integer('prix_unitaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alimentations');
    }
};