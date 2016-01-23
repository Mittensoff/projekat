@extends('layout')

@section('header')
    <div class="logo"><a href="/">  </a><img src="http://lorempixel.com/image_output/abstract-q-c-1920-96-5.jpg">
    </div>
    <div class="top-header" style="padding: 10px;border-color:red;"> *
        Desktop/Mob Lang Currency
    </div>

    <div class="btm-header" style="padding: 10px;border:solid;border-color:black"> **
        <div class="btm-header logo" style="float:left"> Logo</div>

        <div class="btm-header search" style="float:left">
            {!! Form::open() !!}

            {!! Form::close()!!}
        </div>

        <div class="btm-header wishlist" style="float:left"> Wishlist</div>

        <div class="btm-header shopping-cart" style="float:left"> Shopping cart</div>
    </div>

@stop

@section('main')
    <div class="main" style="padding: 10px;border:solid;border-color:blue;">

        <div class="" style="border:solid;border-color:yellowgreen;float:left;width:18%;height:100%;">


        </div>

        <div class="main-content" style="border:solid;border-color:yellow;float:left;width:80%">


        </div>

    </div>
@stop

@section('footer')
    <div class="footer" style="clear:both">
        footer
    </div>
@stop
