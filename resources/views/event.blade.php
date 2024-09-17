@extends('layouts.app')

@section('content')


    <!-- Navbar Start -->
    @include('temp.navbar')
    <!-- Navbar End -->

    <!-- Breadcrumb row END -->
    <div class="content-block">
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-md-7 col-lg-8 col-xl-8">
                        @if ($event->count() > 0)
                            @foreach ($event as $item)
                                <div class="recent-news blog-lg m-b40">
                                    <div class="action-box blog-lg">
                                        <img src="{{ asset('/Events/img/' . $item->event_img) }}" class="imgEvent" alt="">
                                    </div>
                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-calendar"></i>1-2-2024</a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i>23 Comment</a></li>

                                        </ul>
                                        <h5 class="post-title"><a href="blog-details.html">{{ $item->title }}</a></h5>
                                        <p>{{ $item->description }}</p>
                                        <div class="post-extra">
                                            <a href="#" class="btn-link">READ MORE</a>
                                            <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>78
                                                Comment</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <!-- Pagination start -->
                        <div class="pagination-bx rounded-sm gray clearfix">
                            <ul class="pagination">
                                <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Pagination END -->
                    </div>
                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-md-5 col-lg-4 col-xl-4 sticky-top">
                        <aside class="side-bar sticky-top">
                            <div class="widget">
                                <h6 class="widget-title">Search</h6>
                                <div class="search-bx style-1">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="text" class="form-control" placeholder="Enter your keywords..."
                                                type="text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="fa fa-search text-primary"></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget recent-posts-entry">
                                <h6 class="widget-title">plogs Posts</h6>
                                <div class="widget-post-bx">
                                    @foreach ($event as $item)
                                        <div class="widget-post clearfix">
                                            <div class="ttr-post-media"> <img
                                                    src="{{ asset('/Events/img/' . $item->event_img) }}" width="200"
                                                    height="143" alt=""> </div>
                                            <div class="ttr-post-info">
                                                <div class="ttr-post-header">
                                                    <h6 class="post-title"><a href="">{{ $item->title }}</a></h6>
                                                </div>
                                                <ul class="media-post">
                                                    <li><a href="#"><i class="fa fa-calendar"></i>Oct 23 2019</a></li>
                                                    <li><a href="#"><i class="fa fa-comments-o"></i>15 Comment</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="widget widget-newslatter">
                                <h6 class="widget-title">Newsletter</h6>
                                <div class="news-box">
                                    <p>Enter your e-mail and subscribe to our newsletter.</p>
                                    <form class="subscription-form"
                                        action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php"
                                        method="post">
                                        <div class="ajax-message"></div>
                                        <div class="input-group">
                                            <input name="dzEmail" required="required" type="email" class="form-control"
                                                placeholder="Your Email Address" />
                                            <button name="submit" value="Submit" type="submit"
                                                class="btn black radius-no">
                                                <i class="fa fa-paper-plane-o"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        
                            <div class="widget widget_tag_cloud">
                                <h6 class="widget-title">Tags</h6>
                                <div class="tagcloud">
                                    <a href="#">Design</a>
                                    <a href="#">User interface</a>
                                    <a href="#">SEO</a>
                                    <a href="#">WordPress</a>
                                    <a href="#">Development</a>
                                    <a href="#">Joomla</a>
                                    <a href="#">Design</a>
                                    <a href="#">User interface</a>
                                    <a href="#">SEO</a>
                                    <a href="#">WordPress</a>
                                    <a href="#">Development</a>
                                    <a href="#">Joomla</a>
                                    <a href="#">Design</a>
                                    <a href="#">User interface</a>
                                    <a href="#">SEO</a>
                                    <a href="#">WordPress</a>
                                    <a href="#">Development</a>
                                    <a href="#">Joomla</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Content END-->
    @include('temp.footer')
@endsection
