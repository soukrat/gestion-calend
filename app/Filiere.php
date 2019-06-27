<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classe;
use App\Intervention;

class Filiere extends Model
{
    //
    public function classe(){

    	return $this->hasOne('Classe');
    }
    public function intervention(){

    	return $this->hasMany('Intervention');
    }
}
