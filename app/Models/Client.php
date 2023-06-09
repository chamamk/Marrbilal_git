<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable=[
        'cin',
        'nomcomplete',
        'telephone',
        'comptebancaire',
        'adresse',
        'ville'
    ];
    public function bls()
    {
        return $this->hasMany(Bl::class);
    }
    public function bonCommandes()
    {
        return $this->hasMany(BonCommande::class);
    }
}
