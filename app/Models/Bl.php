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
        'client_id'
    ];
    public function detailbls()
    {
        return $this->hasMany(DetailBL::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
