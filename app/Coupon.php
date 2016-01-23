<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //
    protected $table='coupon';

    //Eloquent relationships ===

    public function user(){

        return $this->belongsToMany('App\User', 'coupon_holder_id');
    }

    //Eloquent relationships ===
}
