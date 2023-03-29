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
        'unite',
        'pourcentageChute',
        'dateecheance',
        'mode_paiement_id',
        'article_id',
        'client_id'
    ];
    public function mode_paiement()
    {
        return $this->belongsTo(ModePaiement::class);
    }
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    public function bls()
    {
        return $this->hasMany(Bl::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function Surface(){
        $surface=$this->longueur*$this->largeur*$this->qte*$this->pourcentageChute;
        return ($surface);
    }
    public function total(){
        $total=$this->Surface()*$this->prix;
        return ($total);
    }
}
