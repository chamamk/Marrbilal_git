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
        Schema::create('bls', function (Blueprint $table) {
            $table->id();
            $table->date('datebl');
            $table->float('longueur');
            $table->float('largeur');
            $table->float('qte');
            $table->boolean('isregle');
            $table->string('etat');
            $table->foreignId('bon_commande_id')->constrained();
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
        Schema::dropIfExists('bls');
    }
};
