<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMarbre extends Model
{
    use HasFactory;
    protected $fillable=[
        'typemarbre'
    ];
    public function articles()
    {
        return $this->belongsTo(Article::class);
    }

}
