@extends('layouts.shop_layout')

@section('content')
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
<section class="">
    <div class="" style="background-image: url('{{ asset('assets/images/vendors/'.$vendor->coverimage)}}'); width:100%; position: relative; padding:17% 5% 13% 5%; background-size: cover;  background-repeat: no-repeat; background-position: center center height:100%">
        <div class="row">
            <div class="bg-white rounded p-xs-1 p-md-2 p-lg-2 col-xs-4" style=" position: absolute; top:5px; left:10px;">

                <h5>Name: {{$vendor->business_name}}</h5>

            </div>
        </div>

        <div class="row">
            <div class="bg-white rounded p-xs-1 p-md-2 p-lg-2 col-xs-4" style=" position: absolute; bottom:5px; left:10px;">

                <h5>Address: {{$vendor->street}}</h5>

            </div>
        </div>

    </div>
</section>

<div class="container rounded-lg my-3 main-shadwo ">
    {{-- Shop Description --}}
    <div class="bg-gray text-center rounded  p-2 my-3" style="font-size:2em">
        {{$vendor->business_description}}
    </div>

    {{-- Filter and Search section --}}
    <div class="row justify-content-center">
        <div class="btn-group dropup pb-3 ">
            <button type="button" class="btn cecra_btn px-5 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter
            </button>
            <div class="dropdown-menu">
              <!-- Dropdown menu links -->
                <a href="#" class="btn cecra_btn">Filter</a>

                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
        {{-- <div class="">
            <button class="btn cecra_btn px-5   " type="button" id="button-addon1">Filter</button>
        </div> --}}
        <div class="input-group col-md-8 mb-3">
            <input type="text" class="form-control" placeholder="search">
            <div class="input-group-append">
                <button class="btn cecra_btn" type="button" id="button-addon1">Search</button>
            </div>
        </div>
    </div>
</div>


    <!-- Popular Section -->
    <section class="section section-doctor">
        <div class="container">
                <div class="section-header text-center n2">
                    <h2>Suggestions</h2>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                    <div class="doctor-slider slider">
                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="product.php">Iphone</a>
                                </h3>
                                <a href="product.php">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/pro/1118.jpg') }}">
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
                                        <h4 class="speciality text-center">AVS mobiles </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->

                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <h3 class="title text-center">
                                    <a href="product.php">Nokia 2</a>
                                </h3>
                                <a href="product.php">
                                    <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{ URL::asset('assets/images/pro/1112.jpg') }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <div class="pro-content">
                                    <h3 class="speciality text-center">260€</h3>
                                    <div class="rating text-center">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(52)</span>
                                    </div>
                                    <div class=" row-sm">
                                        <h4 class="speciality text-center">idea Mobiles </h4>
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
    <!-- /Popular Section -->

    <!-- Popular Section -->
    <section class="section section-doctor">
        <div class="container-fluid">
            <div class="section-header text-center n2">
                <h2>Categories</h2>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="container">
                        <div class="doctor-slider slider">

                            <!-- Doctor Widget -->
                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Clothes Baby</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/clothes-baby.jpg') }}">
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
                                            <h4 class="speciality text-center"><a href="">view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Clothes Man</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/clothes-man.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a href="">view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Clothes Woman</a>
                                    </h3>
                                    <a href="">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/clothes-woman.jpg')}}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a href="">view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Clothes Girl</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/clothes-girls.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a href="">view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Clothes Boy</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/clothes-boy.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a>view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Clothes All types</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/clothes-all.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a>view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Clothes Others</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/clothes-others.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a>view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Technology and Electronics</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/img/productCategories/technologyElectronics.jpg')}}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a>view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Electrodomestics</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/Electrodomestics.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a>view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Video Games</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/Video Games.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a>view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Toys</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/Toys.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a>view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Computing</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/Computing.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a>view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Perfumes and Cosmetics</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/Perfumes and Cosmetics.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a>view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Jewelry</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/img/productCategories/Jewelry.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a>view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Software</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/Software.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a>view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">Shoes</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image"
                                             src="{{URL::asset('assets/images/productCategories/Shoes.jpg') }}">
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
                                            <i class="fas fa-star"></i>-->
                                        </div>
                                        <div class=" row-sm">
                                            <h4 class="speciality text-center"><a>view more</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>


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
                <h2>Shops</h2>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="container">
                        <div class="doctor-slider slider">
                            <!-- Doctor Widget -->
                            <div class="profile-widget">
                                <div class="doc-img">
                                    <h3 class="title text-center">
                                        <a href="doctor-profile.html">juicy joy</a>
                                    </h3>
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" style="height: 180px;" alt="User Image" src="{{URL::asset('assets/images/pro/v1.png') }}">
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
            </div>
        </div>
    </section>
    <!-- /Popular Section -->

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
                            <a href="product.php">
                                <h5 class="text-white" style="padding:80px;">{{ $item->category_name }}</h5>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </center>
        </div>
    </div>

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









@endsection
