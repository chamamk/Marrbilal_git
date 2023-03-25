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
        Schema::create('bon_commandes', function (Blueprint $table) {
            $table->id();
            $table->date('datebc');
            $table->float('longueur');
            $table->float('largeur');
            $table->float('qte');
            $table->float('prix');
            $table->string('unite');
            $table->float('pourcentageChute');
            $table->float('avance')->nullable();
            $table->date('dateecheance');
            $table->foreignId('mode_paiement_id')->constrained();
            $table->foreignId('article_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bon_commandes');
    }
};
