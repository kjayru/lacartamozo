<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function Franchise(){
        return $this->belongsTo('App\Franchise');
    }
}
