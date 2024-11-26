<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $guarded=["id"];


    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }


    public function actualite()
{
    return $this->hasMany(Actualite::class);
}
}
