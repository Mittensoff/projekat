<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table='order';


    //Eloquent relationships ===

    public function user_info(){

        return $this->belongsTo('App\User_info');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }

    //Eloquent relationships ===
}
