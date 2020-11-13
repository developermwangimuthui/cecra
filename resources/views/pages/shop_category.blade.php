@include('includes.header')

<body>
    @include('includes.user_nav')

    <div class=" " style="height: 350px">
        <img class="" style="width: 100%; height: 350px; display: block; " alt="User Image" src="{{$fine->category_image}}">
        {{-- <img class="" style="width: 100%; height: 350px; display: block; " alt="User Image" src="{{ asset('assets/images/productCategories/'.$fine->category_image)}}"> --}}

    </div>
    {{-- <div class="container pt-4">

        <h3>{{$fine->category_name}} Close To Me</h3>
    </div> --}}
    <!-- Shops Close to Me Section -->
    <section class="section section-doctor">
        <div class="container">
            <div class="section-header  n2">
                <h3>{{$fine->category_name}} Shops Close to Me</h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                    <div class="doctor-slider slider">
                        <!-- Doctor Widget -->
                        @foreach ($final as $item)

                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                    <a href="{{route('shop-portal', $item->vendor_id)}}">{{$item->business_name}}</a>
                                    </h3>
                                    <a href="product.php">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/vendors/'.$item->coverimage) }}">
                                    </a>
                                    <a href="javascript:void(0)" class="fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <div class="pro-content">
                                        <div class="rating text-center">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(52)</span>
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center">{{$item->street}} </h4>
                                            <h4 class="speciality text-center">{{$item->street_number}} </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- /Doctor Widget -->



                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="product.php">Mack book</a>
                                </h3>
                                <a href="product.php">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/pro/1113.jpg') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center">1260€</h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(52)</span>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">BGN Laptops </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="product.php">Chicken Pizza</a>
                                </h3>
                                <a href="product.php">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{ URL::asset('assets/images/pro/1117.jpg') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center">60€</h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(52)</span>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">Town Pizza </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="product.php">Mack book</a>
                                </h3>
                                <a href="product.php">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{ URL::asset('assets/images/pro/1114.jpg') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center">560€</h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(52)</span>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">LAV Computers </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="product.php">Gaming device</a>
                                </h3>
                                <a href="product.php">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{ URL::asset('assets/images/pro/controller.jpg') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center">560€</h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(52)</span>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">Gaming HUB </h4>
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
    <!-- /Shops Close to Me  Section -->
    <div class="container my-5" style="padding-top: 130px; position: relative;">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12" style="background: url('{{URL::asset('assets/images/122.png')}}'); background-size: cover;  background-repeat: no-repeat; background-position: center center; height:280px; background-size: cover;">
            <div style=" bottom: 0; left:42%; position: absolute;">
                <center>
                    <h3 class="text-white">Shops Join Us</h3>
                    <button class="btn btn-danger radius-0 text-white">Shop Now</button>
                </center>
            </div>
        </div>
    </div>


    @include('includes/footer')


</body>

