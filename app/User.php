<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';



    //Eloquent relationships ===
    public function user_credit_card(){

        return $this->hasMany('App\User_credit_card');
    }

    public function user_info(){

        return $this->hasMany('App\User_info');
    }

    public function coupon(){

        return $this->hasMany('App\Coupon', 'coupon_holder_id');
    }

    public function conversationSender(){

        return $this->hasMany('App\Conversation','sender_id');
    }

    public function conversationReceiver(){

        return $this->hasMany('App\Conversation','receiver_id');
    }


    public function product(){

        return $this->hasMany('App\Product');
    }

    public function shopping_cart(){

        return $this->hasOne('App\Shopping_cart');
    }

    public function wishlist(){

        return $this->hasOne('App\Wishlist');
    }
    //Eloquent relationships ===

}
