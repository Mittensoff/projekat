<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', "IndexPageController@load");

Route::get('/pages/product/{id}',"ProductPageController@load");

Route::get('pages/sub_category/{id}',"SearchPageController@loadSubCategory");

Route::get('pages/search',"SearchPageController@loadSubCategory");

Route::get('pages/seller/{id}',"SellerPageController@load");




