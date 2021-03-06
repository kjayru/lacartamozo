<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function menus(){
        return $this->hasMany('App\Menu');
    }

    public function client(){
        return $this->belongsTo('App\Client');
    }
    
}
