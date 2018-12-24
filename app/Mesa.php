<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    public function restaurantdetail(){
        return $this->belongsTo('App\RestaurantDetail');
    }
}
            