<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salsa extends Model
{
    public function salsaclients(){
        return $this->hasMany('App\SalsaClient');
    }
}
