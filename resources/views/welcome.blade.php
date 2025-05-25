@extends('layouts.app')

@section('content')


    <!-- Navbar Start -->
    @include('temp.navbar')
    <!-- Navbar End -->




    <!-- Header Top END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <!-- Form -->
        <div class="section-area section-sp1 ovpr-dark bg-fix online-cours"
            style="background-image:url(assets/images/background/bg1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-white">
                        <h2>{{ __('language.HEADER') }}</h2>
                        <h5>{{ __('language.HEADE1') }}</h5>

                        <form class="cours-search" id="searchForm" action="/results" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="{{ __('language.Search') }}	"
                                    id="searchQuery" name="query">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">{{ __('language.Searchbtn') }}</button>
                                </div>
                                <div id="results"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mw800 m-auto demo">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="cours-search-bx m-b30">
                                <div class="icon-box">
                                    <h3><i class="ti-user"></i><span class="counter">10</span>K</h3>
                                </div>
                                <span class="cours-search-text">{{ __('language.Student') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cours-search-bx m-b30">
                                <div class="icon-box">
                                    <h3><i class="ti-book"></i><span class="counter">70</span></h3>
                                </div>
                                <span class="cours-search-text">{{ __('language.courseCount') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="cours-search-bx m-b30">
                                <div class="icon-box">
                                    <h3><i class="ti-layout-list-post"></i><span class="counter">88</span>K</h3>
                                </div>
                                <span class="cours-search-text">{{ __('language.userCount') }} </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form END -->
        <!-- Main Slider -->
        <div class="content-block">

            @if ($result->count() > 0 && $result->count() <= 4)
                <!-- Popular Courses -->
                <div class="section-area section-sp2 popular-courses-bx">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 heading-bx left">
                                <h2 class="title-head">{{ __('language.Popular') }}</h2>
                                <p>{{ __('language.Popular1') }}</p>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($result as $item)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mt-3 ">
                                    <div class="item">
                                        <a href="{{ route('mycourse', $item->id) }}">

                                            <div class="cours-bx">
                                                <div class="action-box">
                                                    <img src="{{ asset('/Course/img/' . $item->imgHome) }}"
                                                        style="height: 200px; width: 100%;" alt="">
                                                    <a href="{{ route('mycourse', $item->id) }}" class="btn">Read
                                                        More</a>
                                                </div>
                                                <div class="info-bx text-center">
                                                    <h5><a
                                                            href="{{ route('mycourse', $item->id) }}">{{ $item->name }}</a>
                                                    </h5>
                                                    <span>Programming</span>
                                                </div>
                                                <div class="cours-more-info">
                                                    <div class="review">
                                                        <span>3 Review</span>
                                                        <ul class="cours-star">
                                                            <li class="active"><i class="fa fa-star"></i></li>
                                                            <li class="active"><i class="fa fa-star"></i></li>
                                                            <li class="active"><i class="fa fa-star"></i></li>
                                                            <li class="active"><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    @if ($item->price == '' or $item->price == 'free')
                                                        <div class="price">
                                                            <del>{{ $item->price + 3000 }}</del>
                                                            <h5 class="free text-success">Free</h5>
                                                        </div>
                                                    @else
                                                        <div class="price">
                                                            <del>{{ $item->price + 500 }}</del>
                                                            <h5>{{ $item->price }}</h5>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Popular Courses END -->
            @elseif($result->count() > 4)
                <!-- Popular Courses -->
                <div class="section-area section-sp2 popular-courses-bx">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 heading-bx left">
                                <h2 class="title-head">{{ __('language.Popular') }}</h2>
                                <p>{{ __('language.Popular1') }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                                @foreach ($result as $item)
                                    <div class="item">
                                        <a href="{{ route('mycourse', $item->id) }}">
                                            <div class="cours-bx">
                                                <div class="action-box">
                                                    <img src="{{ asset('/Course/img/' . $item->imgHome) }}"
                                                        style="height: 200px; width: 100%;" alt="">

                                                    <a href="{{ route('mycourse', $item->id) }}" class="btn">Read
                                                        More</a>
                                                </div>
                                                <div class="info-bx text-center">
                                                    <h5><a href="#">{{ $item->name }}</a></h5>
                                                    <span>Programming</span>
                                                </div>
                                                <div class="cours-more-info">
                                                    <div class="review">
                                                        <span>4 Review</span>
                                                        <ul class="cours-star">
                                                            <li class="active"><i class="fa fa-star"></i></li>
                                                            <li class="active"><i class="fa fa-star"></i></li>
                                                            <li class="active"><i class="fa fa-star"></i></li>
                                                            <li class="active"><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    @if (asset($item->price) or $item->price != 'free')
                                                        <div class="price">
                                                            <del>{{ $item->price + 500 }}</del>
                                                            <h5>{{ $item->price }}</h5>
                                                        </div>
                                                    @else
                                                        <li class="price">
                                                            <h5 class="free">Free</h5>
                                                        </li>
                                                    @endif
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Popular Courses END -->
            @endif
            <!-- Our Services END -->

        </div>
        <!-- Popular Courses END -->

        <!-- Our Story ==== -->
        <div class="section-area bg-gray section-sp1 our-story">
            <div class="container">
                <div class="row align-items-center d-flex">
                    <div class="col-lg-5 col-md-12 heading-bx">
                        <h2 class="m-b10">{{ __('language.Kian') }}</h2>
                        <p>{{ __('language.About') }}</p>
                        <a href="#" class="btn">{{ __('language.Read') }}</a>
                    </div>
                    <div class="col-lg-7 col-md-12 heading-bx p-lr">
                        <div class="video-bx">
                            <img class="w-100" style="height: 380px;"
                                src={{ asset('img/Screenshot_٢٠٢٤-٠٧-٠٦-٠٣-٢٢-٥٣-٣٥_f598e1360c96b5a5aa16536c303cff92.jpg') }}
                                alt="" />
                            <a href={{ asset('img/VID-20240706-WA0002.mp4') }} class="popup-youtube video"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Story END ==== -->
        <!-- Our Status ==== -->
        <div class="section-area content-inner section-sp1">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1">
                                <div class="text-primary">
                                    <span class="counter">3000</span><span>+</span>
                                </div>
                                <span class="counter-text">{{ __('language.CompletedProjects') }}</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1">
                                <div class="text-black">
                                    <span class="counter">2500</span><span>+</span>
                                </div>
                                <span class="counter-text">{{ __('language.HappyStudent') }}</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1">
                                <div class="text-primary">
                                    <span class="counter">1500</span><span>+</span>
                                </div>
                                <span class="counter-text">{{ __('language.QuestionsAnswered') }}</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="counter-style-1">
                                <div class="text-black">
                                    <span class="counter">100</span><span>%</span>
                                </div>
                                <span class="counter-text">{{ __('language.OrderedCoffee') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Status END ==== -->
        @if ($event->count() > 0)
            <div class="section-area section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-bx">
                            <h2 class="title-head m-b0">{{ __('language.BLOG1') }}</h2>
                            <p class="m-b0">{{ __('language.BLOG2') }} </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">
                            @foreach ($event as $item)
                                <div class="item">
                                    <div class="event-bx">
                                        <div class="action-box">
                                            <img src="{{ asset('/Events/img/' . $item->event_img) }}"
                                                class="blog-welcome-img" alt="">
                                        </div>
                                        <div class="info-bx d-flex">
                                            {{-- <div>
                                                <div class="event-time">
                                                    <div class="event-date" style="font-size: 15px">{{ $item->time_en }}
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="event-info">
                                                <h4 class="event-title"><a href="#">{{ $item->title }}</a>
                                                </h4>
                                                <ul class="media-post">

                                                    <li><a href="#"><i class="fa fa-map-marker"></i>
                                                            {{ __('language.Kian') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('event') }}" class="btn">{{ __('language.event') }} </a>
                    </div>
                </div>
            </div>
        @endif

        @if ($instructores->count() > 0)
            <div class="section-area section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-bx">
                            <h2 class="title-head m-b0">{{ __('language.Instructors') }}</h2>
                            <p class="m-b0">{{ __('language.Instructors1') }}</p>
                        </div>
                    </div>


                    <div class="row">
                        @if ($instructores->count() > 4)
                            <div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                                @foreach ($instructores as $instruct)
                                    <div class="item">
                                        <div class="profile-bx text-center">
                                            <div class="user-profile-thumb">
                                                <img src="{{ asset('/instructore/img/' . $instruct->img) }}"
                                                    alt="" />
                                            </div>
                                            <div class="profile-info">
                                                <h4>{{ $instruct->name }}</h4>
                                                <span>{{ $instruct->your_job }}</span>
                                            </div>
                                            <div class="profile-social">
                                                <ul class="list-inline m-a0">
                                                    <li><a href="{{ $instruct->facebook }}"><i
                                                                class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="{{ $instruct->linked_in }}"><i
                                                                class="fa fa-linkedin"></i></a>
                                                    </li>
                                                    <li><a href="{{ $instruct->linked_in }}"><i
                                                                class="fa fa-instagram"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="profile-tabnav">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            href="{{ route('incourse', $instruct->id) }}"><i
                                                                class="ti-book"></i>{{ __('language.COURSES') }}</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#quiz-results"><i
                                                                class="ti-bookmark-alt"></i>{{ __('language.quizresults') }}</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            @foreach ($instructores as $instruct)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

                                    <div class="item">
                                        <div class="profile-bx text-center">
                                            <div class="user-profile-thumb">
                                                <img src="{{ asset('/instructore/img/' . $instruct->img) }}"
                                                    alt="" />
                                            </div>
                                            <div class="profile-info">
                                                <h4>{{ $instruct->name }}</h4>
                                                <span>{{ $instruct->your_job }}</span>
                                            </div>
                                            <div class="profile-social">
                                                <ul class="list-inline m-a0">
                                                    <li><a href="{{ $instruct->facebook }}"><i
                                                                class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="{{ $instruct->linked_in }}"><i
                                                                class="fa fa-linkedin"></i></a>
                                                    </li>
                                                    <li><a href="{{ $instruct->linked_in }}"><i
                                                                class="fa fa-instagram"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="profile-tabnav">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            href="{{ route('incourse', $instruct->id) }}"><i
                                                                class="ti-book"></i>{{ __('language.COURSES') }}</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#quiz-results"><i
                                                                class="ti-bookmark-alt"></i>{{ __('language.quizresults') }}</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        @endif

                    </div>

                </div>
        @endif
    </div>





    <!-- Footer Start -->
    @include('temp.footer')
@endsection
