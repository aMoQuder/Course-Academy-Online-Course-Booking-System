@extends('layouts.app')

@section('content')
    @include('temp.navbar')
    <!-- About Start -->
    <div class="page-content">
        <!-- Page Heading Box ==== -->

        <!-- Page Heading Box END ==== -->
        <!-- Page Content Box ==== -->

        <!-- About Us END ==== -->

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
                            <img class="w-100" style="height: 380px;" src={{ asset('img/Screenshot_٢٠٢٤-٠٧-٠٦-٠٣-٢٢-٥٣-٣٥_f598e1360c96b5a5aa16536c303cff92.jpg') }} alt="" />
                            <a href={{ asset("img/VID-20240706-WA0002.mp4") }} class="popup-youtube video"><i
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
                            <span class="counter-text">{{__('language.CompletedProjects')}}</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                        <div class="counter-style-1">
                            <div class="text-black">
                                <span class="counter">2500</span><span>+</span>
                            </div>
                            <span class="counter-text">{{__('language.HappyStudent')}}</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                        <div class="counter-style-1">
                            <div class="text-primary">
                                <span class="counter">1500</span><span>+</span>
                            </div>
                            <span class="counter-text">{{__('language.QuestionsAnswered')}}</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                        <div class="counter-style-1">
                            <div class="text-black">
                                <span class="counter">100</span><span>%</span>
                            </div>
                            <span class="counter-text">{{__('language.OrderedCoffee')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Status END ==== -->
        <!-- About Content ==== -->
        <img src="{{ asset('assets/images/background/bg1.jpg') }}" style="position: absolute; height: 460px; z-index: -1; width: 100%" alt="">
        <div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center"
            >
            <div class="container">
                <div class="row" style="position: relative">
                    <div class="col-md-12">
                        <div class="join-content-bx text-white">
                            <h2>{{__('language.ABOUT2')}}</h2>
                            <h4> <span class="counter">57  </span>{{__('language.HEADER')}}  </h4>

                            <p>{{__('language.About')}}</p>
                            <a href="#" class="btn button-md">{{__('language.Read')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Content END ==== -->

    </div>
    <!-- Page Content Box END ==== -->
    @if (session('massege'))
        <h3 class="alert alert-alert-primary text-center">{{ session('massege') }} </h3>
    @endif
    <!-- Testimonials ==== -->
    <div class="section-area section-sp2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading-bx left">
                    <h2 class="title-head text-uppercase">{{__('language.what doy say')}}</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                    @if (Auth::user()->opinion == 'noOpinion')
                        <a href="" class="btn btn-warning my-2 px-3" style="font-size: 20px" data-toggle="modal"
                            data-target="#exampleModal">
                            {{__('language.add opinion')}}</a>
                    @else
                        <a href="" class="btn btn-warning my-2 px-3" style="font-size: 20px" data-toggle="modal"
                            data-target="#exampleModal">
                            {{__('language.Change opinion')}}</a>
                    @endif
                </div>
            </div>
            @if ($user->count() > 0)
                <div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                    @foreach ($user as $item2)
                        @if ($item2->opinion != 'noOpinion')
                            <div class="item2">
                                <div class="testimonial-bx">

                                    <div class="testimonial-info">
                                        <h5 class="name">{{ $item2->name }}</h5>
                                    </div>
                                    <div class="testimonial-content ">
                                        <p> {{__('language.myopinion')}} <br> {{ $item2->opinion }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            @endif
        </div>
    </div>
    <!-- Testimonials END ==== -->
    </div>
    <div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark m-auto">
                <div class="modal-body  " style="direction: rtl;">
                    <button type="button" class="close text-light btn-warning my-3 px-4 py-2 rounded-1"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> {{__('language.close')}}</span>
                    </button>


                    @foreach ($user as $item2)
                        @if (Auth::user()->id == $item2->id)
                            <form action="{{ route('addopinion') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{ $item2->id }}">
                                    <input type="text" name="" id=""
                                        value="{{ Auth::user()->name }}"class="form-control my-3" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" cols="5" name="opinion" class="form-control" placeholder=" {{__('language.add opinion')}}"></textarea>
                                </div>
                                <input type="submit" class="btn btn-outline-success my-3 px-4 py-2 rounded-1 "
                                    value=" {{__('language.add opinion')}}">
                            </form>
                            <!-- Footer Start -->
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->

    @include('temp.footer')
@endsection
