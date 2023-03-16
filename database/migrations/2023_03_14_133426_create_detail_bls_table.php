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
        Schema::create('detail_bls', function (Blueprint $table) {
            $table->id();
            $table->float('longueur');
            $table->float('largeur');
            $table->float('qte');
            $table->float('prix');
            $table->float('avance');
            $table->date('dateecheance');
            $table->foreignId('mode_paiement_id')->constrained();
            $table->foreignId('bl_id')->constrained();
            $table->foreignId('article_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_bls');
    }
};
