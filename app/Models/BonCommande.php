<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonCommande extends Model
{
    use HasFactory;
    protected $fillable=[
        'datebc',
        'longueur',
        'largeur',
        'qte',
        'prix',
        'avance',
        'dateecheance',
        'mode_paiement_id',
        'article_id',
        'client_id'
    ];
    public function mode_paiement()
    {
        return $this->belongTo(ModePaiement::class);
    }
    public function article()
    {
        return $this->belongTo(Article::class);
    }
    public function bls()
    {
        return $this->hasMany(Bl::class);
    }
}
