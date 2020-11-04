<center>
    <div class="bg-white d-none d-sm-block">
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-white " >

                <a href="ownerpanel.php" class="mr-auto"><img style=" width: 70px;" src="{{URL::asset('assets/images/ui/logo.png')}}" alt=""/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto"  >
                    <li class="nav-item active px-2">
                        <a class="nav-link" href="{{ route('restaurants') }}">{{ session()->get('businessuser_info')['business_name'] }}</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link fas fa-sign-out-alt" href="{{ route('bus/signout') }}">{{ trans('sentence.Logout') }}</a>            </li>
                    <li class="nav-item dropdown px-2 pt-2">
                        <a class="fas fa-globe icon-font" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('lang2',['locale'=>'en']) }}">{{ strtoupper(trans('sentence.signup.unitedKingdom')) }}</a>                <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('lang2',['locale'=>'es']) }}">{{ strtoupper(trans('sentence.signup.spain')) }}</a>
                     </div>
                    </li>

                  </ul>
        <div class="">
            <a class="nav-link" href="{{ route('restaurants') }}">
                <img class="img-profile-nav border" src="{{ session()->get('businessuser_info')['image'] }}">
            </a>
        </div>
                </div>
            </nav>
        </div>
    </div>
</center>

<center>
    <header class="header d-block d-sm-none">
        <nav class="navbar navbar-expand-lg navbar-light bg-white " >

            <a href="ownerpanel.php" class="mr-auto"><img style=" width: 70px;" src="{{URL::asset('assets/images/ui/logo.png')}}" alt=""/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto"  >
                <li class="nav-item active px-2">
                    <a class="nav-link" href="{{ route('restaurants') }}">{{ session()->get('businessuser_info')['business_name'] }}</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link fas fa-sign-out-alt" href="{{ route('bus/signout') }}">{{ trans('sentence.Logout') }}</a>            </li>
                <li class="nav-item dropdown px-2 pt-2">
                    <a class="fas fa-globe icon-font" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('lang2',['locale'=>'en']) }}">{{ strtoupper(trans('sentence.signup.unitedKingdom')) }}</a>                <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('lang2',['locale'=>'es']) }}">{{ strtoupper(trans('sentence.signup.spain')) }}</a>
                 </div>
                </li>

              </ul>
    <div class="">
        <a class="nav-link" href="{{ route('restaurants') }}">
            <img class="img-profile-nav border" src="{{ session()->get('businessuser_info')['image'] }}">
        </a>
    </div>
            </div>
        </nav>
    </header>
</center>

