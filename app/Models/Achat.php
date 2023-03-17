<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;
    protected $fillable=[
        'longueur',
        'largeur',
        'qte',
        'unite',
        'prix',
        'dateachat',
        'dateecheance',
        'article_id',
        'fournisseur_id',
        'mode_paiement_id'
    ];
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    public function mode_paiement()
    {
        return $this->belongsTo(ModePaiement::class);
    }
}
