<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonFranchise extends Model
{
    public function restaurants(){
        return $this->belongsToMany('App\Restaurant');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
