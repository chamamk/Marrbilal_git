<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bl extends Model
{
    use HasFactory;
    protected $fillable=[
        'datebl',
        'isregle',
        'etat',
        'bon_commande_id'
    ];
    public function boncommande()
    {
        return $this->belongsTo(BonCommande::class);
    }
}
