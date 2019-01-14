<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    

    public function franchise()
    {
        return $this->belongsTo('App\Franchise');
    }

    public function mozos()
    {
        return $this->hasMany('App\Mozo');
    }

    public function categories(){
        return $this->hasMany('App\Category');
    }

    public function ingredients(){
        return $this->hasMany('App\Ingredient');
    }

    public function salsas(){
        return $this->hasMany('App\Salsa');
    }

    public function clientphotos(){
        return $this->hasMany('App\ClientPhoto');
    }

    public function services(){
        return $this->belongsToMany('App\Service');
    }
    public function configurations()
    {
        return $this->belongsToMany('App\Configuration');
    }
}

