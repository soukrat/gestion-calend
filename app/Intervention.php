<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Intervenant;
use App\Salle;
use App\Filiere;

class Intervention extends Model
{
    //
    public function intervenant(){

    	return $this->hasOne('Intervenant');
    }
    public function salle(){

    	return $this->hasOne('Salle');
    }
     public function Filiere(){

        return $this->hasMany('Filiere');
    }
}
