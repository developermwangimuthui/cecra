<center>
        <div class="bg-white">
            <div class="contacv">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <a href="ownerpanel.php"><img style=" width: 70px;" src="{{URL::asset('assets/images/ui/logo.png')}}" alt=""/></a>
                    {{-- <button class="navbar-toggler bg-success-light btn-border" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-list"></span>
                    </button> --}}
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <form class="my-lg-0" style=" padding-top: 12px;">
                            <ul class="form-inline list-unstyled">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('restaurants') }}">{{ session()->get('businessuser_info')['business_name'] }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fas fa-sign-out-alt" href="{{ route('bus/signout') }}">{{ trans('sentence.Logout') }}</a>
                                </li>
                                <!--					<li class="nav-item">
                                                        <a class="nav-link " href="login.php">REPORTS</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="login.php">MESSAGES</a>
                                                    </li>-->
                                <!--                    <li class="nav-item">
                                                        <a class="nav-link icon-font" href="login.php"><i class="far fa-question-circle "></i></a>
                                                    </li>-->
                                <li class="nav-item">
                                    <div class="nav-link">
                                        <a class="fas fa-globe icon-font" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-carret-down"></span></a>
                                        <div class="dropleft">
                                            <div class="dropdown-menu shadow my-n4" style="margin-left:860px;" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{ route('lang2',['locale'=>'en']) }}">{{ strtoupper(trans('sentence.signup.unitedKingdom')) }}</a>
                                                <a class="dropdown-item" href="{{ route('lang2',['locale'=>'es']) }}">{{ strtoupper(trans('sentence.signup.spain')) }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li class="nav-item">
                                     <a class="nav-link" href="{{ route('restaurants') }}">
                                        <img class="img-profile-nav border" src="{{ session()->get('businessuser_info')['image'] }}">
                                    </a>

                                </li>
                            </ul>
                        </form>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </center>

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


