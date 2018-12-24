<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function category(){
        return $this->hasMany('App\Category');
    }

    public function menus()
    {
        return $this->hasMany('App\Menu');
    }

    public function menuphotos(){
        return $this->hasMany('App\MenuPhoto');
    }
}
