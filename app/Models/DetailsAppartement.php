<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsAppartement extends Model
{
    use HasFactory;


    public function appartement(){
        return $this->belongsTo(Appartement::class); 
    }
}
