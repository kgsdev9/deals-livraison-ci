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
        Schema::create('commune_livreur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commune_id')->nullable();
            $table->unsignedBigInteger('livreur_id')->nullable();
            $table->foreign('commune_id')->references('id')->on('communes');
            $table->foreign('livreur_id')->references('id')->on('livreurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commune_livreur');
    }
};
