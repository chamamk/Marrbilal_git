<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bl extends Model
{
    use HasFactory;
    protected $fillable=[
        'datebl',
        'longueur',
        'largeur',
        'qte',
        'isregle',
        'etat',
        'article_id',
        'client_id',
        'bon_commande_id'
    ];
    public function boncommande()
    {
        return $this->belongsTo(BonCommande::class);
    }
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
