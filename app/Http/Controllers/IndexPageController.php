<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexPageController extends Controller
{
    public function load(){
        $categories=\App\Category::all();
        $sub_categories=\App\Sub_category::all();
        $products=\App\Product::paginate(15);

        return view('index',compact('products','categories','sub_categories'));
    }
}
