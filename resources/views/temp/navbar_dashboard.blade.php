<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <div class="mobile-search waves-effect waves-light">
                        <div class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/home">
                        <div class="d-flex">


                            <h2 class="mt-2 ml-2">Kian</h2>
                        </div>
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                        <li class="header-notification">
                            <a href="#!" class="waves-effect waves-light">
                                <i class="ti-bell"></i>
                                <span class="badge bg-c-red"></span>
                            </a>
                            <ul class="show-notification">
                                <li>
                                    <h6>Notifications</h6>
                                    <label class="label label-danger">New</label>
                                </li>
                                @foreach ($instructores as $instructore)


                                <li class="waves-effect waves-light">
                                    <div class="media">
                                        <img class="d-flex align-self-center img-radius" src="{{ asset('/instructore/img/' . $instructore->img) }}" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">{{$instructore->name}}</h5>
                                            <p class="notification-msg">{{$instructore->your_job}}</p>
                                            <span class="notification-time">{{rand(1,30)}}.minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="user-profile header-notification">
                            <a href="#!" class="waves-effect waves-light">
                                <img src={{ asset("asset/images/11.2.jpg") }} class="img-radius" alt="User-Profile-Image">
                                {{-- <span> {{ Auth::user()->name }}</span> --}}
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">

                                <li class="waves-effect waves-light">


                                        <a class="ti-layout-sidebar-left" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="">
                            <div class="main-menu-header">
                                <img class="img-80 img-radius" src={{ asset("asset/images/11.2.jpg") }} alt="User-Profile-Image">
                                <div class="user-details">
                                    <span id="more-details">
{{-- @if ({{ asset({{Auth::user()}})}}) --}}

{{-- {{ Auth::user()->name }}
@endif --}}


                                        <i class="fa fa-caret-down"></i></span>
                                </div>
                            </div>
                            <div class="main-menu-content">
                                <ul>
                                    <li class="more-details">
                                        <a href=""><i class="ti-user"></i>View Profile</a>
                                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                                        <a class="ti-layout-sidebar-left" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                                    </a>

                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="pcoded-navigation-label">{{ __('language.Navigation') }}</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="active">
                                <a href="{{route("home")}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">{{ __('language.dashboard') }}</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>

                        <div class="pcoded-navigation-label">{{ __('language.table') }}</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="">
                                <a href="{{route('table')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                    <span class="pcoded-mtext">{{ __('language.table') }}</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>

                        <div class="pcoded-navigation-label">{{ __('language.bages') }}</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                    <span class="pcoded-mtext">{{ __('language.bages') }}</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a  href="{{ route('users.create') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext">{{ __('language.register') }}</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{route("welcome")}}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>S</b></span>
                                            <span class="pcoded-mtext">{{ __('language.simplePage') }}</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
