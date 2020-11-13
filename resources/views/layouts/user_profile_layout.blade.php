@include('includes.header')
<body>
    <div style="box-shadow: 2px 2px 12px lightblue;">
    {{-- @include('includes.headers.topmenu') --}}
    <x-userProfileNav/>
    </div>
    @yield('content')
</body>
@include('includes/footer')
