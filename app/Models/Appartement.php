<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'projet_id', 'type', 'order'];

    public function DetailsAppartement(){
        return $this->hasMany(DetailsAppartement::class );
    }



    public function Projet(){
        return $this->belongsTo(Projet::class);
    }

}
