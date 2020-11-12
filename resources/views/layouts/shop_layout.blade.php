@include('includes.header')
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
    .catlist::-webkit-scrollbar{
            display:none;
    }
</style>
<body>
    {{-- @include('includes.user_nav') --}}
    <x-userNavbar/>
    @yield('content')
    
    @include('includes.footer')
</body>
