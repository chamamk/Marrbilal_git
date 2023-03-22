<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModePaiement extends Model
{
    use HasFactory;
    protected $fillable=[
        'modepaiement',
        // 'dateecheance'
    ];
    public function achats()
    {
        return $this->hasMany(Achat::class);
    }
    public function detailbl()
    {
        return $this->hasMany(DetailBl::class);
    }
}
