<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductPageController extends Controller
{
    public function load($id){

        $categories=\App\Category::all();
        $sub_categories=\App\Sub_category::all();
        $product=\App\Product::find($id);

        $product_orders=$product->order;
        $product_images=$product->product_image;
        $seller=$product->user;

        return view('/pages.product',compact('product','product_orders','product_images','seller','categories',
            'sub_categories'));
    }
}
