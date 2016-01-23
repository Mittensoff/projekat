<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SellerPageController extends Controller
{
   public function load($id){
      $seller=\App\User::findOrNew($id);
      $products=$seller->product;
      $orders=array();
      $tags=array();
      foreach($products as $product){
         $orders[]=$product->order->toArray();
         $tags[]=$product->tag;
      }

      return view('/pages/seller',compact('seller','products','orders','tags'));
   }
}
