<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function costumerdetail()
    {
        return $this->hasOne('App\CostumerDetail');
    }

    public function packagestates()
    {
        return $this->hasMany('App\PackageStates');
    }

    public function campaigndetails()
    {
        return $this->hasMany('App\CampaignDetail');
    }
}
