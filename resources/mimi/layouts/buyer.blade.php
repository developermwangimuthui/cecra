<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Business Portal</title>

    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/businessportal.css') }}"> --}}
    <link rel="icon" href="{{ URL::asset('assets/images/ui/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ URL::asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/plugins/fontawesome/css/all.min.css') }}">


    {{-- Script --}}
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

</head>

    <body class="bg-light">
        <div style="box-shadow: 2px 2px 12px lightblue;">
            @include('buyer.inc.header')
        </div>

        <!-- Content -->
        @yield('content')
        <!-- Footer -->
        @include('buyer.inc.footer')
        <!-- Footer -->
        @stack('scripts')
        <script>
            var myLabel                 = myLabel || {};
            myLabel.locale       = '{{route('locale')}}';
        </script>
        <script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </body>
</html>
