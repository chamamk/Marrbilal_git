<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBl extends Model
{
    use HasFactory;
    protected $fillable=[
        'longueur',
        'largeur',
        'qte',
        'prix',
        'avance',
        'dateecheance',
        'mode_paiement_id',
        'bl_id',
        'article_id'
    ];
    public function mode_paiement()
    {
        return $this->belongTo(ModePaiement::class);
    }
    public function bl()
    {
        return $this->belongTo(Bl::class);
    }
    public function article()
    {
        return $this->belongTo(Article::class);
    }

}
