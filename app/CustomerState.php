<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerState extends Model
{
    const DESACTIVADO = 1;
    const ACTIVO = 2;
   

    public function customerdetail()
    {
        return $this->belongsTo('App\CustomerDetail');
    }
}
