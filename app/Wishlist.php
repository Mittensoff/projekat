<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    //
    protected $table='wishlist';

    //Eloquent relationships ===

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function product(){

        return $this->hasMany('App\Product');
    }


    //Eloquent relationships ===

}
