<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Intervention;

class Salle extends Model
{
    //

    public function intervention(){

    	return $this->hasMany('Intervention');
    }
}
