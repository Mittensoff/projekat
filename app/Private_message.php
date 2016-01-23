<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Private_message extends Model
{
    //
    protected $table='private_message';

    //Eloquent relationships ===

    public function conversation(){

        return $this->belongsTo('App\Conversation');
    }

    //Eloquent relationships ===
}
