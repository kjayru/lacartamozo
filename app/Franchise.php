<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    protected $table = "franchisees";
    public function restaurants(){
        return $this->belongsTo('App\Restaurant');
    }

    public function franchisees(){
        return $this->belongsTo('App\Franchise');
    }

    public function Clients(){
        return $this->belongsTo('App\Clients');
    }

}
