<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopping_cart extends Model
{
    //
    protected $table='shopping_cart';


    //Eloquent relationships ===

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function product(){

        return $this->HasMany('App\Product');
    }

    //Eloquent relationships ===

}
