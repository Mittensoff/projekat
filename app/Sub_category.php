<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    //
    protected $table='sub_category';

    //Eloquent relationships ===

    public function product(){

        return $this->hasMany('App\Product');
    }

    public function category(){

        return $this->belongsTo('App\Category');
    }

    //Eloquent relationships ===
}
