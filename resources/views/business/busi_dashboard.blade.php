@extends('layouts.seller')
@section('content')

<div class="col-md-10 col-sm-12">
    <div class=" bg-white main-shadwo">
        <div class="enter-conta">
            <div class="row" >
  <div class="col-lg-12 col-sm-12">
            <h1>¡Bienvenido a tu tienda!
            </h1>
            <p>Recuerda que para que tu portal digital este activo debes completar la información de tu tienda y empezar a crear tus productos desde la sección de Administración. </p>
            </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="circle-tile">
                        <a href="#">
                            <div class="circle-tile-heading dark-blue">
                            <i class="fa fa-users fa-fw fa-3x"></i>
                            </div>
                        </a>
                        <div class="circle-tile-content dark-blue">
                            <div class="circle-tile-description text-faded"> {{trans('sentence.business.dashboard.label.users')}} </div>

                            <div class="circle-tile-number text-faded">0 <span id="sparklineA"></span> </div>

                            <a href="#" class="circle-tile-footer">{{trans('sentence.business.dashboard.link.moreInfo')}} <i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="circle-tile">
                        <a href="#">
                            <div class="circle-tile-heading green">
                                <i class="fa fa-cash-register fa-fw fa-3x"></i>
                            </div>
                        </a>
                        <div class="circle-tile-content green">
                            <div class="circle-tile-description text-faded"> {{trans('sentence.business.dashboard.label.revenue')}} </div>

                            <div class="circle-tile-number text-faded"> &euro;0 </div>

                            <a href="#" class="circle-tile-footer">{{trans('sentence.business.dashboard.link.moreInfo')}} <i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="circle-tile">
                        <a href="#">
                            <div class="circle-tile-heading red">
                            <i class="fa fa-shopping-cart fa-fw fa-3x"></i>
                            </div>
                        </a>
                        <div class="circle-tile-content red">
                            <div class="circle-tile-description text-faded"> {{trans('sentence.business.dashboard.label.orders')}} </div>

                            <div class="circle-tile-number text-faded"> 0 <span id="sparklineC"></span> </div>
                            <a href="#" class="circle-tile-footer">{{trans('sentence.business.dashboard.link.moreInfo')}} <i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="circle-tile">
                        <a href="#">
                            <div class="circle-tile-heading purple">
                                <i class="fa fa-comments fa-fw fa-3x"></i>
                            </div>
                        </a>
                        <div class="circle-tile-content purple">
                            <div class="circle-tile-description text-faded"> {{trans('sentence.business.dashboard.label.mentions')}} </div>

                            <div class="circle-tile-number text-faded"> 0 <span id="sparklineD"></span> </div>

                            <a href="#" class="circle-tile-footer">{{trans('sentence.business.dashboard.link.moreInfo')}} <i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
          
        </div>
        </div>

    </div>
</div>



@endsection




