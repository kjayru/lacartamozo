<<<<<<< Updated upstream
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table ="clients";

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
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table ="clients";
    
    public function Franchise(){
        return $this->belongsTo('App\Franchise');
    }
}

