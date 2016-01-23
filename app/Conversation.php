<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    //
    protected $table='conversation';

    //Eloquent relationships ===

    public function userSender(){

        return $this->belongsToMany('App\User','sender_id');
    }

    public function userReceiver(){

        return $this->belongsToMany('App\User','receiver_id');
    }

    public function private_message(){

        $this->hasMany('App\Private_message');
    }

    //Eloquent relationships ===
}
