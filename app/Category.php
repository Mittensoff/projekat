<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='category';

    //Eloquent relationships ===

    public function sub_category(){

        return $this->hasMany('App\Sub_category');
    }

    //Eloquent relationships ===

}
