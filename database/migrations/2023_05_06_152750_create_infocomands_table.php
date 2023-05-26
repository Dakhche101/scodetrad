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
        Schema::create('infocomands', function (Blueprint $table) {
            $table->id();
            $table->string('quantité')->nullable();
            $table->string('prix_unitaire')->nullable();
            $table->string('produits_associé')->nullable();
            $table->string('comande_associé')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infocomands');
    }
};
