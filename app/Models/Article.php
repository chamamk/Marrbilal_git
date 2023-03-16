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
    public function typemarbre()
    {
        return $this->belongsTo(TypeMarbre::class);
    }
    public function detailbls()
    {
        return $this->hasMany(DetailBL::class);
    }
}
