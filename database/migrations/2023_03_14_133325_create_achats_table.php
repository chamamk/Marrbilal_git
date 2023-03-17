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
        Schema::create('achats', function (Blueprint $table) {
            $table->id();
            $table->float('longueur');
            $table->float('largeur');
            $table->float('qte');
            $table->float('prix');
            $table->date('dateachat');
            //unité mesure soit m2 ou ml ou unité
            $table->string('unite');
            $table->date('dateecheance');
            $table->foreignId('article_id')->constrained();
            $table->foreignId('fournisseur_id')->constrained();
            $table->foreignId('mode_paiement_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achats');
    }
};
