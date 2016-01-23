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
    {{--Filterisanje i lista proizvoda--}}
    <div class="main-filter" style="width:13%;float:left">
        <span>Price Range:
            {!! Form::open(['method'=>'get','url'=>'/pages/sub_category/'.$sub_category_id,'name'=>'filter_form']) !!}
            {!! Form::text("min_price",$min_price) !!}
            {!! Form::text("max_price",$max_price) !!}
        </span><br>
        <span>{!! Form::select("colors",array_merge([''],$colors),null) !!}
        </span><br>
        <span>{!! Form::select("types",array_merge([''],$types),null) !!}
        </span>
        <span>{!! Form::select('sellers',array_merge([''],$sellers),null) !!}</span><br>
        <span> {!! Form::submit('submit',['name'=>'submit_filter']) !!}</span>
        {!! Form::close()!!}

    </div>

    <div class="main-products">
        @if($requested)
            @foreach($products_filt as $product)
                <a href="{{url("/pages/product/".$product['id'])}}">
                    <div class="product-div" id="product-div-id-{{$product['id']}}}"
                         style="height:100px width:250px;float:left;padding:5px; margin:5px">
                        <img src="{{$product->main_image_path}}"> <br>
                        {{$product->name}}<br>
                        {{$product->price}}<br>
                        <span>{{$product->short_description}}</span><br>
                        {{$product->instock}}<br>
                    </div>
                </a>
            @endforeach
        @endif

        @if($requested==0)
            @foreach($products as $product)
                <a href="{{url("/pages/product/".$product['id'])}}">
                    <div class="old-product-div" id="old-product-div-id-{{$product['id']}}}"
                         style="height:100px width:250px;float:left;padding:5px; margin:5px">
                        <img src="{{$product->main_image_path}}"> <br>
                        {{$product->name}}<br>
                        {{$product->price}}<br>
                        <span>{{$product->short_description}}</span><br>
                        {{$product->instock}}<br>
                    </div>
                </a>
            @endforeach
        @endif


    </div>
@stop

@section('footer')
    <div class="footer" style="clear:both">
        footer
    </div>
@stop