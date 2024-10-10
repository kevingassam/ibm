<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Information extends Model
{
    use HasFactory;


    public function GetLogo(){
        if ($this->logo) {
            return Storage::url($this->logo);
        } else {
            return "https://e-build.tn/assets/images/brand-logo.png";
        }

    }

    public function GetIcon(){
        if ($this->icon) {
            return Storage::url($this->icon);
        } else {
            return "https://e-build.tn/assets/favicon/apple-touch-icon.png";
        }

    }

}
