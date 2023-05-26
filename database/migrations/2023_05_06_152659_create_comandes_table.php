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
        Schema::create('comandes', function (Blueprint $table) {
            $table->id();
            $table->string('date_comande')->nullable();
            $table->string('status_comande')->nullable();
            $table->string('mode_paiement')->nullable();
            $table->string('client_associé')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comandes');
    }
};
