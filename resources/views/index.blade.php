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

        <div class="main-category" style="border:solid;border-color:yellowgreen;float:left;width:18%;height:100%;">

            <ul class="category_ul">
                @foreach($categories as $categoryRS)
                    <li class="category_li" id="category_li{{$categoryRS['id']}}">{{$categoryRS['name']}}</li>
                    <ul class="sub_category_ul">
                        @foreach($sub_categories as $sub_categoryRS)

                            @if($sub_categoryRS['category_id']==$categoryRS['id'])

                                <a href="/pages/sub_category/{{$sub_categoryRS['id']}}">
                                <li class="sub_category_li{{$sub_categoryRS['category_id']}}"> {{$sub_categoryRS['name'] }}</li>
                                </a>
                            @endif

                        @endforeach
                        </ul>
                @endforeach
            </ul>

        </div>

        <div class="main-content" style="border:solid;border-color:yellow;float:left;width:80%">
            @for($i=0; $i<count($products);$i++)
                <a href="pages/product/{{$products[$i]['id']}}">
                    <div class="product" style="float:left; margin:5px; padding:5px; height:100px width:250px;">
                        <div class="product_image" style="clear:both; margin:20px; padding:10px; height:100px width:250px;">
                            <img src="{{$products[$i]['main_image_path']}}" height="200px" width="200px">
                        </div>
                        <div class="product_info" style="clear:both; margin:20px; padding:10px; height:100px width:250px;">

                            {{'Name: ' . $products[$i]['name']}} <br>
                            {{'Price:' . $products[$i]['price'] }}

                        </div>
                    </div>
                </a>
            @endfor
            <div style="clear:both;">
                {!! $products->render() !!}
            </div>
        </div>

    </div>
@stop

@section('footer')
    <div class="footer" style="clear:both">
        footer
    </div>
@stop