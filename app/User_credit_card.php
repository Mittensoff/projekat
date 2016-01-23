<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_credit_card extends Model
{
    //
    protected $table='user_credit_card';

    //Eloquent relationships ===
    public function user(){

        return $this->belongsTo('App\User');
    }
    //Eloquent relationships ===
}
