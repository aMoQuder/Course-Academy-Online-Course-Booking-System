@extends('layouts.app')

@section('content')
    <!-- Navbar Start -->
    @include('temp.navbar')
    <!-- Navbar End -->

    <!-- Content -->

    @foreach ($result as $item)
        @if ($item->id == $old_id)
            <div class="page-content bg-white">

                <!-- Breadcrumb row END -->
                <!-- inner page banner END -->
                <div class="content-block">
                    <!-- About Us -->
                    <div class="section-area section-sp1">
                        <div class="container">
                            @if (session('massege') == 'success booking')
                                @if (session('massege'))
                                    <h3 class="alert alert-dark text-success text-center">{{ session('massege') }} </h3>
                                @endif
                            @else
                                @if (session('massege'))
                                    <h3 class="alert alert-dark text-danger text-center">{{ session('massege') }} </h3>
                                @endif
                            @endif
                            <div class="row d-flex flex-row-reverse">
                                <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                                    <div class="course-detail-bx ">
                                        <div class="course-price">
                                            <del>{{ $item->price + 500 }}</del>
                                            <h4 class="price">{{ $item->price }}</h4>
                                        </div>
                                        <div class="course-buy-now text-center">
                                            <a href="#" class="btn radius-xl text-uppercase" data-toggle="modal"
                                                data-target="#exampleModal">{{ __('language.book Now This Courses') }}</a>
                                            <!-- Button trigger modal -->


                                        </div>
                                        @foreach ($instructores as $instruct)
                                            @if ($item->parent_id == $instruct->id)
                                                <div class="teacher-bx">
                                                    <div class="teacher-info">
                                                        <div class="teacher-thumb">
                                                            <img src="{{ asset('/instructore/img/' . $instruct->img) }}"
                                                                alt="" />
                                                        </div>
                                                        <div class="teacher-name">
                                                            <h5>{{ $instruct->name }}</h5>
                                                            <span>{{ $instruct->your_job }}</span>
                                                        </div>
                                                    </div>
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
                                                    <div class="price categories">
                                                        <span>{{ __('language.Categories') }}</span>
                                                        <h5 class="text-primary">{{ $instruct->your_job }}</h5>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach


                                        <div class="course-info-list scroll-page">
                                            <ul class="navbar">
                                                <li><a class="nav-link" href="#overview"><i
                                                            class="ti-zip"></i>{{ __('language.Overview') }}</a>
                                                </li>
                                                <li><a class="nav-link" href="#curriculum"><i
                                                            class="ti-bookmark-alt"></i>{{ __('language.Curriculum') }}</a>
                                                </li>
                                                <li><a class="nav-link" href="#instructor"><i
                                                            class="ti-user"></i>{{ __('language.Instructor') }}</a></li>
                                                <li><a class="nav-link" href="#reviews"><i
                                                            class="ti-comments"></i>{{ __('language.Reviews') }}</a></li>
                                            </ul>
                                        </div>
                                        <div class="video-bx">
                                            <video class="w-100 bg-dark mt-5 " id="cardVideo " style="height: 250px;"
                                                alt="" src="{{ asset('Course/vidue/' . $item->vidueCourse) }}">
                                            </video>
                                            <a onclick="openFullscreen() " id="cardVideo " target="_blank"
                                                class="popup-youtube video"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="courses-post">
                                        <div class="ttr-post-media media-effect">
                                            <img src="{{ asset('/Course/img/' . $item->imgHome) }}" alt=""
                                                class="w-100 height-img">

                                        </div>
                                        <div class="ttr-post-info">
                                            <div class="ttr-post-title ">
                                                <h2 class="post-title"> {{ $item->name }}</h2>
                                            </div>
                                            <div class="ttr-post-text">
                                                <p> {{ $item->description }}.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="courese-overview" id="overview">
                                        <h4>Overview</h4>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-4">
                                                <ul class="course-features">
                                                    <li><i class="ti-book"></i> <span
                                                            class="label">{{ __('language.Lectures') }}</span> <span
                                                            class="value">8</span></li>
                                                    <li><i class="ti-help-alt"></i> <span
                                                            class="label">{{ __('language.Quizzes') }}</span>
                                                        <span class="value">1</span>
                                                    </li>
                                                    <li><i class="ti-time"></i> <span
                                                            class="label">{{ __('language.Duration') }}</span> <span
                                                            class="value">60 hours</span></li>
                                                    <li><i class="ti-stats-up"></i> <span
                                                            class="label">{{ __('language.Skill level') }}</span>
                                                        <span class="value">Beginner</span>
                                                    </li>
                                                    <li><i class="ti-smallcap"></i> <span
                                                            class="label">{{ __('language.Language') }}</span>
                                                        <span class="value">{{ __('language.English') }}</span>
                                                    </li>
                                                    <li><i class="ti-user"></i> <span
                                                            class="label">{{ __('language.Students') }}</span> <span
                                                            class="value">32</span></li>
                                                    <li><i class="ti-check-box"></i> <span
                                                            class="label">{{ __('language.Assessments') }}</span>
                                                        <span class="value">{{ __('language.Yes') }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 col-lg-8">
                                                <h5 class="m-b5">{{ __('language.Course Description') }}</h5>
                                                <p> {{ $item->Bigdescription }}</p>

                                                <h5 class="m-b5">{{ __('language.Learning Outcomes') }}</h5>
                                                <ul class="list-checked primary">
                                                    <li>{{ __('language.Over 37 ') }}</li>
                                                    <li>LIVE PROJECT End to End {{ $item->name }} Training Included.</li>
                                                    <li>Learn {{ $item->name }} and Automation basics from a professional
                                                        trainer from your own desk.</li>
                                                    <li>Information packed practical training starting from basics to
                                                        advanced of {{ $item->name }}</li>
                                                    <li>{{ __('language.Best suitable') }}</li>

                                                    <li>{{ __('language.Practical assignments') }}</li>
                                                    <li>{{ __('language.Practical learning') }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-b30" id="curriculum">
                                        <h4>Curriculum</h4>
                                        <ul class="curriculum-list">
                                            <li>
                                                <h5>First Level</h5>
                                                <ul>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 1.</span> Introduction to {{ $item->name }}
                                                        </div>
                                                        <span>60 minutes</span>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 2.</span> User Research in {{ $item->name }}
                                                        </div>
                                                        <span>90 minutes</span>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 3.</span> Evaluating Part 1 in {{ $item->name }}
                                                        </div>
                                                        <span>85 minutes</span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h5>Second Level</h5>
                                                <ul>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 1.</span> Prototyping of {{ $item->name }}
                                                        </div>
                                                        <span>110 minutes</span>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 2.</span> how to create small broject by
                                                            {{ $item->name }}
                                                        </div>
                                                        <span>120 minutes</span>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 3.</span> Evaluating Part 2{{ $item->name }}
                                                        </div>
                                                        <span>120 minutes</span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h5>Final</h5>
                                                <ul>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Part 1.</span> Final Test
                                                        </div>
                                                        <span>120 minutes</span>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Part 2.</span> Online Test
                                                        </div>
                                                        <span>120 minutes</span>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>project finil</span> Online project finil in
                                                            {{ $item->name }}
                                                        </div>
                                                        <span>120 minutes</span>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="" id="instructor">
                                        <h4>Instructor</h4>
                                        @foreach ($instructores as $instruct)
                                            @if ($item->parent_id == $instruct->id)
                                                <div class="instructor-bx">
                                                    <div class="instructor-author">
                                                        <img src="{{ asset('/instructore/img/' . $instruct->img) }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="instructor-info">
                                                        <h6>{{ $instruct->name }}</h6>
                                                        <span>{{ $instruct->your_job }}</span>
                                                        <ul class="list-inline m-tb10">
                                                            <li><a href="{{ $instruct->facebook }}"
                                                                    class="btn sharp-sm facebook"><i
                                                                        class="fa fa-facebook"></i></a></li>
                                                            <li><a href="{{ $instruct->name }}"
                                                                    class="btn sharp-sm twitter"><i
                                                                        class="fa fa-twitter"></i></a></li>
                                                            <li><a href="{{ $instruct->linked_in }}"
                                                                    class="btn sharp-sm linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="{{ $instruct->instagram }}"
                                                                    class="btn sharp-sm google-plus"><i
                                                                        class="fa fa-instagram"></i></a></li>
                                                        </ul>
                                                        <p class="m-b0">
                                                            {{ $item->benfit }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="" id="reviews">
                                        <h4>{{ __('language.Reviews') }}</h4>

                                        <div class="review-bx">
                                            <div class="all-review">
                                                <h2 class="rating-type">3</h2>
                                                <ul class="cours-star">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>3 Rating</span>
                                            </div>
                                            <div class="review-bar">
                                                <div class="bar-bx">
                                                    <div class="side">
                                                        <div>5 star</div>
                                                    </div>
                                                    <div class="middle">
                                                        <div class="bar-container">
                                                            <div class="bar-5" style="width:90%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="side right">
                                                        <div>150</div>
                                                    </div>
                                                </div>
                                                <div class="bar-bx">
                                                    <div class="side">
                                                        <div>4 star</div>
                                                    </div>
                                                    <div class="middle">
                                                        <div class="bar-container">
                                                            <div class="bar-5" style="width:70%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="side right">
                                                        <div>140</div>
                                                    </div>
                                                </div>
                                                <div class="bar-bx">
                                                    <div class="side">
                                                        <div>3 star</div>
                                                    </div>
                                                    <div class="middle">
                                                        <div class="bar-container">
                                                            <div class="bar-5" style="width:50%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="side right">
                                                        <div>120</div>
                                                    </div>
                                                </div>
                                                <div class="bar-bx">
                                                    <div class="side">
                                                        <div>2 star</div>
                                                    </div>
                                                    <div class="middle">
                                                        <div class="bar-container">
                                                            <div class="bar-5" style="width:40%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="side right">
                                                        <div>110</div>
                                                    </div>
                                                </div>
                                                <div class="bar-bx">
                                                    <div class="side">
                                                        <div>1 star</div>
                                                    </div>
                                                    <div class="middle">
                                                        <div class="bar-container">
                                                            <div class="bar-5" style="width:20%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="side right">
                                                        <div>80</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact area END -->

            </div>
            <div id="fullscreenVideo" class="fullscreen-video">
                <button class="close-btn" onclick="closeFullscreen()">✖️</button>
                <video id="fullscreenVideoElement" controls>
                    <source src="{{ asset('Course/vidue/' . $item->vidueCourse) }}" type="video/mp4">
                    {{ __('language.Your browser') }}
                </video>
            </div>
            <!-- Content END-->
            <!-- Modal -->
            @guest

                <div class="modal fade " style="margin-top: 100px;" id="exampleModal" tabindex="-5555"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-light m-auto">
                            <div class="modal-body  " style="direction: rtl;">
                                <button type="button" class="close text-dark btn-warning my-3 px-4 py-2 rounded-1"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                </button>

                                <form action="" class="p-4" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="{{ __('language.EnterName') }}"
                                            class="form-control my-3" aria-describedby="helpId">
                                        @error('name')
                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone"
                                            placeholder="{{ __('language.phone') }}"class="form-control my-3"
                                            aria-describedby="helpId">
                                        @error('phone')
                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <a href="{{ route('login') }}" class="btn btn-outline-success my-3 px-4 py-2 rounded-1">
                                        {{ __('language.book') }}
                                    </a>
                                </form>
                                <!-- Footer Start -->

                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="modal fade " style="margin-top: 100px;" id="exampleModal" tabindex="-5555"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-light m-auto">
                            <div class="modal-body  " style="direction: rtl;">
                                <button type="button" class="close text-dark btn-warning my-3 px-4 py-2 rounded-1"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                </button>

                                <form action="{{ route('bookingstore') }}" class="p-4" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="course" value="{{ $item->name }}">

                                        <input type="text" name="name"
                                            value="{{ Auth::user()->name }}"class="form-control my-3"
                                            aria-describedby="helpId">
                                        @error('name')
                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone"
                                            placeholder="{{ __('language.phone') }}"class="form-control my-3"
                                            aria-describedby="helpId">
                                        @error('phone')
                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <input type="submit" class="btn btn-outline-success my-3 px-4 py-2 rounded-1 "
                                        value="{{ __('language.book') }}">
                                </form>
                                <!-- Footer Start -->

                            </div>
                        </div>
                    </div>
                </div>
            @endguest
        @endif
    @endforeach

    <!-- Footer Start -->
    @include('temp.footer')

    {{-- end footer  --}}
@endsection
