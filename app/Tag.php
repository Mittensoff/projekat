<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table='tag';

    //Eloquent relationships ===

    public function product(){

        return $this->belongsToMany('App\Product');
    }

    //Eloquent relationships ===
}
