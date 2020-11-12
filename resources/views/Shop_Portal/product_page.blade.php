@extends('layouts.shop_layout')

@section('content')
<div class="container-fluid">

<div class="d-flex bd-highlight ">

    <div class="input-group flex-grow-1   mb-3">
        <input type="text" class="form-control " placeholder="search more products">
        <div class="input-group-append">
            <button class="btn cecra_btn" type="button" id="button-addon1">Search </button>
        </div>
    </div>
</div>
<div class="row">
    {{-- Left most part --}}
    <div class="col-md-7" >
        <h4 style="font-weight: 500;">{{$product->product_brand}} close to you</h4 >
        <h4 style="font-weight: 500;"> <span style="font-weight: 600;" > Shop name:</span> {{$shop->business_name}}</h4>
            <div class="row col-md-12">
                <div class="col-md-6">
                    <div class="pb-3 ">

                        <img class="" style="width: auto; height: 350px; display: block; " alt="" src="{{asset('assets/images/product_images/'.$product_image->vendor_product_image)}}">
                    </div>

                    <ul class="list-group list-group-horizontal catlist" style="overflow-x: scroll; -ms-overflow-style: none; scrollbar-width: none; white-space: nowrap;">
                        @foreach ($product_image_thumb as $item)
                            <li class="list-group-item bg-light border-0 ">
                                <img class="" style="width: auto; height: 80px; display: block; " alt="" src="{{asset('assets/images/product_images/'.$product_image->vendor_product_image)}}">
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-6">
                    {{-- <h3 >product id: {{$product->vendor_product_id}}</h3> --}}
                    <h6>{{$product->product_name}}</h6>
                    <div class="rating" >
                        <i  class="fas fa-star text-primary filled "></i>
                        <i  class="fas fa-star text-primary filled"></i>
                        <i  class="fas fa-star text-primary filled"></i>
                        <i  class="fas fa-star text-primary filled"></i>
                        <i  class="fas fa-star "></i>
                    </div>
                    <div class="font-weight-bolder">
                        <h6>41 reviews</h6>
                    </div>
                    {{-- <h3>product brand: {{$product->product_brand}}</h3> --}}
                    <p>{{$product->product_description}}</p>

                    <h3>Current price: {{$product->product_price}} <i class="fas fa-euro"></i></h3>

                    <h4>Distance: 300mts from where you are</h4>

                    <p>97% of buyers enjoyed this product</p>


                        <ul class="list-group list-group-horizontal catlist" style="overflow-x: scroll; -ms-overflow-style: none; scrollbar-width: none; white-space: nowrap;">
                            <h4>SIZES: </h4>
                            @if (count($product_size)>0)
                            @foreach ($product_size as $item)
                            <h4 class="mx-2">{{$item->product_size}}</h4>
                                @endforeach
                            @endif
                        </ul>
                        <ul class="list-group list-group-horizontal catlist" style="overflow-x: scroll; -ms-overflow-style: none; scrollbar-width: none; white-space: nowrap;">
                            <h4>COLORS: </h4>
                             @if (count($product_color)>0)
                                @foreach ($product_color as $item)
                                    <h4 class="mx-2" >{{$item->product_color}}</h4>
                                @endforeach
                            @endif
                        </ul>

                        <button class="btn cecra_btn mx-2" type="button" id="button-addon1">Search </button>
                        <button class="btn cecra_btn" type="button" id="button-addon1">Search </button>


                </div>
            </div>

    </div>
    <div class="col-md-5 border border-success rounded">
        <div class="pb-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7979.002712139981!2d37.14342542293501!3d-0.7222193198794162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m5!1s0x182898772fa42e3b%3A0x2fbd14992a254c38!2sMURANG%E2%80%99A%20LAW%20COURTS%2C%20Near%20DC&#39;s%20Office%2C%20Near%20District%20Hospital%2C%20P.%20O%20Box%20146%2C%20Muranga!3m2!1d-0.7182493!2d37.155765099999996!4m3!3m2!1d-0.7258277!2d37.139361699999995!5e0!3m2!1ssw!2ske!4v1605184271115!5m2!1ssw!2ske" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <button style="cursor: not-allowed" class="btn cecra_btn mb-2   disabled" type="button" id="button-addon1">Delivery in your area : 5 € </button>
        <button style="cursor: not-allowed" class="btn cecra_btn disabled" type="button" id="button-addon1">Pick Up : 0 € </button>
    </div>
</div>
</div>


@endsection
