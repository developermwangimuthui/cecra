@extends('layouts.user_profile_layout')
@section('content')
<div class="col-md-10 col-sm-12 container mt-2 mb-5 pb-4 rounded bg-white ">



    <div class="container text-center">
        <div class="enter-conta">
            <div class="row justify-content-center">
                <img style="width: 10%;" class="" src="{{ URL::asset('assets/images/ui/logo.png') }}" alt="" />

                <p class="font-weight-bolder mx-4 px-5" style="color: #60A3bc; padding-top: 40px; font-size: 25px " >Thankyou for buying with us!</p>
            </div>
        </div>
        <div class="">
            <p style="color: #60A3bc; font-size: 18px">Your product will be delivered to you in less than 48 hours</p>
            <br>
            <p style="color: #60A3bc; font-size: 18px">Don't forget to share our services with your friends to support local businesses</p>
            <div class="container col-md-8">

                <div class="row flex justify-content-center">
                    <a
                    style=" width: 100%; background: #60a3bc !important; color: white !important; "
                    href="{{route('shops')}}"
                    class="btn login_btn col-md-4 pb-3 d-sm-flex" > Visit our shops</a>

                    <a
                    style=" width: 100%; background: #60a3bc !important; color: white !important; "
                    href="{{ route('restaurants') }}"
                    class="btn login_btn col-md-4 offset-md-4"> Visit our Restaurants</a>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection
