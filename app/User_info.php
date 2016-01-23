<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    //
    protected $table='user_info';

    //Eloquent relationships ===

    public function user(){

        return $this->belongsTo('App\User');
    }
    
    public function order(){

        return $this->hasMany('App\Order');
    }


    //Eloquent relationships ===
}
