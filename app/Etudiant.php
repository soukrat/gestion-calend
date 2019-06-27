<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classe;

class Etudiant extends Model
{
    //
     public function classe(){

    	return $this->hasOne('Classe');
    }
}