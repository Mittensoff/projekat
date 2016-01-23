<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table='product';

    //Eloquent relationships ===

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function shopping_cart(){

        return $this->belongsTo('App\Shopping_cart');
    }

    public function wishlist(){

        return $this->belongsTo('App\Wishlist');
    }

    public function order(){

        return $this->hasMany('App\Order');
    }

    public function product_image(){

        return $this->hasMany('App\Product_image');
    }

    public function sub_category(){

        return $this->belongsTo('App\Sub_category');
    }

    public function tag(){

        return $this->belongsToMany('App\Tag');
    }
    //Eloquent relationships ===
}
