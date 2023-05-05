<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable=[
        'nomcommercial',
        'unite',
        'stockinitial',
        'stock',
        'prix',
        'active',
        'type_marbre_id'
    ];
    public function Typemarbre()
    {
        return $this->hasMany(TypeMarbre::class);
    }
    public function bonCommandes()
    {
        return $this->hasMany(BonCommande::class);
    }
    public function bls()
    {
        return $this->hasMany(Bl::class);
    }
    public function achats()
    {
        return $this->hasMany(Achat::class);
    }
}
