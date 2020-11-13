@include('includes.header')

<body>
    @include('includes.home_navbar')
    @include('includes/headers/banner_shop')

    <style>

        .cecra_btn {
            width: 100%;
            background: #60a3bc !important;
            color: white !important;
        }
        .cecra_btn:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }
        </style>



<!-- Popular Section -->
<section class="section section-doctor">
    <div class="container">
        <div class="row">

            <div class="col-lg-12" style="margin-top: ;">
                <div class="section-header border-bottom">
                    <h3>Shops close to me</h3>
                </div>
                <div class="">
                    <div class="doctor-slider slider">
                        <!-- Doctor Widget -->
                        @foreach ($shops as $shops)

                        <div class="profile-widget">
                            <a href="" class="btn bg-white  btn-sm " style="z-index: 1; position: relative;">120 mts</a>
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="{{route('shop-portal', $shops->vendor_id)}}">{{$shops->business_name}}</a>
                                </h3>
                                <a href="{{route('shop-portal', $shops->vendor_id)}}">
                                    @if ($shops->coverimage)

                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/vendors/'.$shops->coverimage)}}">
                                    @else
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/shop/3.jpg') }}">

                                    @endif
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center"></h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">{{$shops->category}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="" class="btn bg-white btn-sm  m-1" style="z-index: 1; position: absolute;">190 mts</a>
                                <h3 class="title text-center">
                                    <!--<a href="doctor-profile.html">Bicycle</a>-->
                                </h3>
                                <a href="product.php">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/shop/3.jpg') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center"></h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">Davod street shop 11</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="" class="btn bg-white btn-sm m-1" style="z-index: 1; position: absolute;">230 mts</a>
                                <h3 class="title text-center">
                                    <!--<a href="doctor-profile.html">Simons</a>-->
                                </h3>
                                <a href="product.php">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/shop/4.jpg') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center"></h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">town market shop 2</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="" class="btn bg-white btn-sm m-1" style="z-index: 1; position: absolute;">280 mts</a>
                                <h3 class="title text-center">
                                    <!--<a href="doctor-profile.html">Excellent</a>-->
                                </h3>
                                <a href="product.php">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/shop/5.jpg') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center"></h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">C-11 area gulberg</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="" class="btn bg-white btn-sm  m-1" style="z-index: 1; position: absolute;">300 mts</a>
                                <h3 class="title text-center">
                                    <!--<a href="doctor-profile.html">Simmons</a>-->
                                </h3>
                                <a href="product.php">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/shop/6.jpg') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center"></h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">Green town 22-c-9</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->



                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="" class="btn bg-white btn-sm  m-1" style="z-index: 1; position: absolute;">340 mts</a>
                                <h3 class="title text-center">
                                    <!--<a href="doctor-profile.html">Watch shop</a>-->
                                </h3>
                                <a href="product.php">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/shop/7.jpg') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center"></h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">Town ship 17-c-3</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Popular Section -->


<!-- Popular Section -->
<section class="section section-doctor">
    <div class="container-fluid">
        <div class="section-header text-center n2">
            <h2>Popular Products Close to me
            </h2>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="container">
                    <div class="doctor-slider slider">
                        @if (count($products)>0)
                        @foreach ($products as $item)
                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="doctor-profile.html">
                                        {{$item->product_name}}
                                    </a>
                                </h3>
                                <a href="doctor-profile.html">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{asset('assets/images/product_images/'.$item->vendor_product_image)}}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center"></h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">Elite market 2-s7</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->
                        @endforeach

                        @endif

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="doctor-profile.html">Bicycle</a>
                                </h3>
                                <a href="doctor-profile.html">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/pro/v2.jpg') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center"></h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">Davod street shop 11</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="doctor-profile.html">Simons</a>
                                </h3>
                                <a href="doctor-profile.html">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/pro/v3.png') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center"></h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">town market shop 2</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="doctor-profile.html">Excellent</a>
                                </h3>
                                <a href="doctor-profile.html">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/pro/v5.png') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center"></h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">C-11 area gulberg</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="doctor-profile.html">Simmons</a>
                                </h3>
                                <a href="doctor-profile.html">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/pro/v4.png') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center"></h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">Green town 22-c-9</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->



                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="doctor-profile.html">Watch shop</a>
                                </h3>
                                <a href="doctor-profile.html">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/pro/v7.jpg') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center"></h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">Town ship 17-c-3</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->
                    </div>
                </div>
            </div>
            <div class="col-lg-12 my-5" style="">
                <div class="container">
                    <div class="section-header n2 border-bottom">
                        <h3>Popular Categories</h3>
                    </div>

                    <center>
                        <div class="row">
                            @foreach ($p_categories as $item)
                            <div class="col-md-4 mt-2">
                            <div class="doc-img" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ $item->category_image }}'); height: 180px;width:100%">
                                    <a href="{{route('shop.category.show', $item->category_id)}}">
                                        <h5 class="text-white" style="padding:80px;">{{ $item->category_name }}</h5>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </center>
                </div>
            </div>

            <div class="container" style=" position: relative;">
                <div class="col-lg-12" style="background: url('{{URL::asset('assets/images/122.png')}}'); height:280px; background-size: cover;">
                    <div style=" bottom: 0; left:42%; position: absolute;">
                        <center>
                            <h3 class="text-white">Shops Join Us</h3>
                            <button class="btn btn-danger radius-0 text-white">Shop Now</button>
                        </center>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /Popular Section -->


{{-- @endsection --}}
@include('includes/footer')
</body>
