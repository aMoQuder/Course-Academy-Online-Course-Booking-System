
@extends('layouts.app')

@section('content')
    <!-- Navbar Start -->
    <!-- Navbar End -->
    <div id="results">
        @if ($courses->isEmpty())
        <div class="page-wraper">
            <div id="loading-icon-bx"></div>
            <div class="account-form">
                <div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">
                    <a href="index.html"><img src="assets/images/logo-white-2.png" alt=""></a>
                </div>
                <div class="account-form-inner">
                    <div class="account-container">
                        <div class="error-page">
                            <h3>Ooopps :</h3>
                            <h2 class="error-title my-3" style="font-size: 50px; line-height: 60px;">The content is not found</h2>
                            <h5>The Page you were looking for, couldn't be found.</h5>
                            <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                            <div class="">
                                <a href="" class="btn m-r5">Preview</a>
                                <a href="" class="btn outline black">Back To Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        @include('temp.navbar')
            @foreach ($courses as $course)
            <div class="page-content bg-white">

                <!-- Breadcrumb row END -->
                <!-- inner page banner END -->
                <div class="content-block">
                    <!-- About Us -->
                    <div class="section-area section-sp1">
                        <div class="container">
                            <div class="row d-flex flex-row-reverse">
                                <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                                    <div class="course-detail-bx ">
                                        <div class="course-price">
                                            <del>{{ $course->price + 500 }}</del>
                                            <h4 class="price">{{ $course->price }}</h4>
                                        </div>
                                        <div class="course-buy-now text-center">
                                            <a href="#" class="btn radius-xl text-uppercase">book Now This Courses</a>
                                        </div>
                                        @foreach ($instructor as $instructor)
                                            @if ($course->parent_id == $instructor->id)
                                                <div class="teacher-bx">
                                                    <div class="teacher-info">
                                                        <div class="teacher-thumb">
                                                            <img src="{{ asset('/instructore/img/' . $instructor->img) }}"
                                                                alt="" />
                                                        </div>
                                                        <div class="teacher-name">
                                                            <h5>{{ $instructor->name }}</h5>
                                                            <span>{{ $instructor->your_job }}</span>
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
                                                        <span>Categories</span>
                                                        <h5 class="text-primary">{{ $instructor->your_job }}</h5>
                                                    </div>
                                                </div>


                                        <div class="course-info-list scroll-page">
                                            <ul class="navbar">
                                                <li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Overview</a>
                                                </li>
                                                <li><a class="nav-link" href="#curriculum"><i
                                                            class="ti-bookmark-alt"></i>Curriculum</a></li>
                                                <li><a class="nav-link" href="#instructoror"><i
                                                            class="ti-user"></i>instructoror</a></li>
                                                <li><a class="nav-link" href="#reviews"><i
                                                            class="ti-comments"></i>Reviews</a></li>
                                            </ul>
                                        </div>
                                        <div class="video-bx">
                                            <video class="w-100 bg-dark mt-5 " id="cardVideo "  style="height: 250px;" alt=""
                                                src="{{ asset('Course/vidue/' . $course->vidueCourse) }}" >
                                            </video >
                                                <a onclick="openFullscreen() " id="cardVideo " target="_blank" class="popup-youtube video"><i
                                                        class="fa fa-play"></i></a>
                                            </div>
                                    </div>
                                    </div>

                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="courses-post">
                                        <div class="ttr-post-media media-effect">
                                            <img src="{{ asset('/Course/img/' . $course->imgHome) }}" alt="" class="w-100 height-img">

                                        </div>
                                        <div class="ttr-post-info">
                                            <div class="ttr-post-title ">
                                                <h2 class="post-title">Nvidia and UE4 Technologies Practice</h2>
                                            </div>
                                            <div class="ttr-post-text">
                                                <p>  {{ $course->description }}.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="courese-overview" id="overview">
                                        <h4>Overview</h4>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-4">
                                                <ul class="course-features">
                                                    <li><i class="ti-book"></i> <span class="label">Lectures</span> <span
                                                            class="value">8</span></li>
                                                    <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span>
                                                        <span class="value">1</span>
                                                    </li>
                                                    <li><i class="ti-time"></i> <span class="label">Duration</span> <span
                                                            class="value">60 hours</span></li>
                                                    <li><i class="ti-stats-up"></i> <span class="label">Skill level</span>
                                                        <span class="value">Beginner</span>
                                                    </li>
                                                    <li><i class="ti-smallcap"></i> <span class="label">Language</span>
                                                        <span class="value">English</span>
                                                    </li>
                                                    <li><i class="ti-user"></i> <span class="label">Students</span> <span
                                                            class="value">32</span></li>
                                                    <li><i class="ti-check-box"></i> <span class="label">Assessments</span>
                                                        <span class="value">Yes</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 col-lg-8">
                                                <h5 class="m-b5">Course Description</h5>
                                                <p>  {{ $course->Bigdescription }}</p>

                                                <h5 class="m-b5">Learning Outcomes</h5>
                                                <ul class="list-checked primary">
                                                    <li>Over 37 lectures and 55.5 hours of content!</li>
                                                    <li>LIVE PROJECT End to End {{ $course->name }} Training Included.</li>
                                                    <li>Learn {{ $course->name }} and Automation basics from a professional
                                                        trainer from your own desk.</li>
                                                    <li>Information packed practical training starting from basics to
                                                        advanced of {{ $course->name }}</li>
                                                    <li>Best suitable for beginners to advanced level users and who learn
                                                        faster when demonstrated.</li>

                                                    <li>Practical assignments at the end of every session.</li>
                                                    <li>Practical learning experience with live project work
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
                                                            <span>Lesson 1.</span> Introduction to {{ $course->name }}
                                                        </div>
                                                        <span>60 minutes</span>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 2.</span> User Research in {{ $course->name }}
                                                        </div>
                                                        <span>90 minutes</span>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 3.</span> Evaluating Part 1 in {{ $course->name }}
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
                                                            <span>Lesson 1.</span> Prototyping of {{ $course->name }}
                                                        </div>
                                                        <span>110 minutes</span>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 2.</span> how to create small broject by
                                                            {{ $course->name }}
                                                        </div>
                                                        <span>120 minutes</span>
                                                    </li>
                                                    <li>
                                                        <div class="curriculum-list-box">
                                                            <span>Lesson 3.</span> Evaluating Part 2{{ $course->name }}
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
                                                            {{ $course->name }}
                                                        </div>
                                                        <span>120 minutes</span>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="" id="instructoror">
                                        <h4>instructoror</h4>

                                        <div class="instructor-bx">
                                            <div class="instructor-author">
                                                <img src="{{ asset('/instructore/img/' . $instructor->img) }}"
                                                    alt="" />
                                            </div>
                                                    <div class="instructoror-info">
                                                        <h6>{{ $instructor->name }}</h6>
                                                        <span>{{ $instructor->your_job }}</span>
                                                        <ul class="list-inline m-tb10">
                                                            <li><a href="{{ $instructor->facebook }}"
                                                                    class="btn sharp-sm facebook"><i
                                                                        class="fa fa-facebook"></i></a></li>
                                                            <li><a href=""
                                                                    class="btn sharp-sm twitter"><i
                                                                        class="fa fa-twitter"></i></a></li>
                                                            <li><a href="{{ $instructor->linked_in }}"
                                                                    class="btn sharp-sm linkedin"><i
                                                                        class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="{{ $instructor->instagram }}"
                                                                    class="btn sharp-sm google-plus"><i
                                                                        class="fa fa-instagram"></i></a></li>
                                                        </ul>
                                                        <p class="m-b0">
                                                            {{ $course->benfit }}
                                                        </p>
                                                    </div>
                                                </div>

                                    </div>
                                    @endif
                                    @endforeach

                                    <div class="" id="reviews">
                                        <h4>Reviews</h4>

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
                    <source src="{{asset("Course/vidue/".$course->vidueCourse)}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <!-- Content END-->
            @endforeach
        @endif

    </div>


@endsection
