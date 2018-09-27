<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function personfranchises(){
        return $this->belongsToMany('App\PersonFranchise');
    }
}
