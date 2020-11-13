@extends('layouts.user_profile_layout')
@section('title','User Dashboard')
@section('content')
<div class="container my-4">
    <div class="margin-25">
        <div class="row">

            @include('includes.headers.sidemenu')

            <div class="col-md-9 col-sm-12">
                <div class="col-md-12 col-sm-12 bg-white main-shadwo">
                    <div class="row bg-header">
                        <div class="col-md-12 col-sm-12">
                            <div class="navbar-nav my-4 margin-25">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3><span class="glyphicon glyphicon-shopping-cart"></span>My Shopping Cart</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn takfua-back text-white float-right">
                                            <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-1 mb-40">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img width="50%" class="img-responsive" src="{{URL::asset('assets/images/ui/Picture4.jpg')}}">
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="product-name"><strong>Iphone11</strong></h4><h4><small>Red color iphone11</small></h4>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6><strong>495.00€ <span class="text-muted">x</span></strong></h6>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="text" class="form-control" value="1">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="button" class="btn btn-link btn-lg">
                                                            <span class="fa fa-trash"> </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img width="80%" class="img-responsive" src="{{URL::asset('assets/images/pro/04.png')}}">
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="product-name"><strong>Gaming Keyboard</strong></h4><h4><small>Best Keyboard</small></h4>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6><strong>211.00€ <span class="text-muted">x</span></strong></h6>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="text" class="form-control" value="1">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="button" class="btn btn-link btn-lg">
                                                            <span class="fa fa-trash"> </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img width="70%" class="img-responsive" src="{{URL::asset('assets/images/pro/03.png')}}">
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="product-name"><strong>USB</strong></h4><h4><small>USB with 32GB Storage</small></h4>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6><strong>25.00€ <span class="text-muted">x</span></strong></h6>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="text" class="form-control" value="1">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="button" class="btn btn-link btn-lg">
                                                            <span class="fa fa-trash"> </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="pt-2" style="white-space: nowrap">Product Delivery</h4>
                                        <div class="container" >

                                                <button class="btn px-3 m-1 takfua-back text-white" type="button" id="button-addon1">Home Delivery 5 €</button>
                                                <button class="btn px-3  takfua-back text-white " type="button" id="button-addon1">Pick Up on Store 0 €</button>


                                        </div>
                                    </div>
                                    <div class="card-footer mb-3">
                                        <div class="row text-center">
                                            <div class="col-md-9">
                                                <h4 class="text-right">Total <strong>731.00€</strong></h4>
                                            </div>
                                            <div class="col-md-3">
                                                <button type="button" class="btn takfua-back text-white col-md-12">
                                                    Checkout
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-header n2">
                        <h3> Shops Close to Me</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="">
                                <div class="doctor-slider slider">
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


            </div>


        </div>

    </div>
</div>

@endsection
