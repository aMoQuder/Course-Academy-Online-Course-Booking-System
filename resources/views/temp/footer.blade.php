 <!-- Footer ==== -->
 <footer>
    <div class="footer-top">
        <div class="pt-exebar">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                    <div class="widget">
                        <h5 class="footer-title">{{ __('language.Sign Up For A Newsletter') }}</h5>
                        <p class="text-capitalize m-b20">{{ __('language.footer') }}</p>
                        <div class="subscribe-form m-b20">
                            <form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
                                <div class="ajax-message"></div>
                                <div class="input-group">
                                    <input name="email" required="required"  class="form-control" placeholder="{{ __('language.Your Email Address') }}" type="email">
                                    <span class="input-group-btn">
                                        <button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="widget footer_widget">
                                <h5 class="footer-title">{{ __('language.COMPANY') }}</h5>
                                <ul>
                                    <li><a href="{{route('welcome')}}">{{ __('language.Home') }}</a></li>
                                    <li><a href="{{route('About')}}">{{ __('language.ABOUT') }}</a></li>
                                    <li><a href="{{route('contact')}}">{{ __('language.CONTACT US') }}</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="widget footer_widget">
                                <h5 class="footer-title">{{ __('language.GetInTouch') }}</h5>
                                <ul>
                                    <li><a href="{{route('event')}}">{{ __('language.BLOG') }}</a></li>
                                    <li><a href="{{route('event')}}">{{ __('language.EVENT') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="widget footer_widget">
                                <h5 class="footer-title">{{ __('language.COURSES') }}</h5>
                                <ul>
                                    <li><a href="{{route('courses')}}">{{ __('language.COURSES') }}</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                    <div class="widget widget_gallery gallery-grid-4">
                        <h5 class="footer-title">Our Gallery</h5>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="{{route("welcome")}}">{{ __('language.Kain academy') }}</a></div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END ==== -->
<button class="back-to-top fa fa-chevron-up" ></button>
</div>
