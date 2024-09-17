@extends('layouts.app')

@section('content')


    <!-- Navbar Start -->
    @include('temp.navbar')
    <!-- Navbar End -->
 <!-- Content -->
 <div class="page-content bg-white">

    <!-- inner page banner END -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                        <div class="widget courses-search-bx placeani">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>Search Courses</label>
                                    <input name="dzName" type="text" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_archive">
                            <h5 class="widget-title style-1">{{__('language.All Courses')}}</h5>
                            <ul>
                                <li class="active"><a href="#">{{__('language.General')}}</a></li>
                                <li><a href="#">{{__('language.IT & Software')}}</a></li>
                                <li><a href="#">{{__('language.Photography')}}</a></li>
                                <li><a href="#">{{__('language.Programming Language')}}</a></li>
                                <li><a href="#">{{__('language.Technology')}}</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <a href="#"><img src={{ asset("assets/images/loading.gif") }} alt="" /></a>
                        </div>
                        <div class="widget recent-posts-entry widget-courses">
                            <h5 class="widget-title style-1">{{__('language.Recent Courses')}}</h5>
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="ttr-post-media"> <img src={{ asset("Course/img/5251720140878.png") }} width="200" height="143" alt=""> </div>
                                    <div class="ttr-post-info">
                                        <div class="ttr-post-header">
                                            <h6 class="post-title"><a href="#">{{__('language.Introduction EduChamp')}}</a></h6>
                                        </div>
                                        <div class="ttr-post-meta">
                                            <ul>
                                                <li class="price">
                                                    <del>$190</del>
                                                    <h5>$120</h5>
                                                </li>
                                                <li class="review">03 Review</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="ttr-post-media"> <img src={{ asset("Course/img/7641722432982.jpg") }} width="200" height="160" alt=""> </div>
                                    <div class="ttr-post-info">
                                        <div class="ttr-post-header">
                                            <h6 class="post-title"><a href="#">{{__('language.English For Tommorow')}}</a></h6>
                                        </div>
                                        <div class="ttr-post-meta">
                                            <ul>
                                                <li class="price">
                                                    <h5 class="free">{{__('language.Free')}}</h5>
                                                </li>
                                                <li class="review">07 Review</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="row">
                            @foreach ($result as $item)
                            <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                <a href="{{route("mycourse",$item->id)}}">
                                    <div class="cours-bx mt-4">
                                        <div class="action-box">
                                            <img src="{{ asset('/Course/img/' . $item->imgHome) }}"  style="height: 200px; width: 100%;" alt="">
                                            <a href="{{route("mycourse",$item->id)}}" class="btn">{{__('language.Read More')}}</a>
                                        </div>
                                        <div class="info-bx text-center">
                                            <h5><a href="{{route("mycourse",$item->id)}}">{{ $item->name }}</a></h5>
                                            <span>{{__('language.Programming')}}</span>
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
                                            <div class="price">
                                                <del>{{ $item->price + 500 }}</del>
                                                <h5>{{ $item->price }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->

</div>
<!-- Content END-->




    <!-- Footer Start -->
    @include('temp.footer')
@endsection
