@extends('layouts.app')
@section('content')

@include('temp.navbar')
<!-- header END ==== -->
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->


    <!-- inner page banner -->
    <div class="page-banner contact-page section-sp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 m-b30">
                    <div class="bg-primary text-white contact-info-bx">
                        <h2 class="m-b10 title-head">Contact <span>Information</span></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="widget widget_getintuch">
                            <ul>
                                <li><i class="ti-location-pin"></i>75k Newcastle St. Ponte Vedra Beach, FL 309382 New York
                                </li>
                                <li><i class="ti-mobile"></i>0800-123456 (24/7 Support Line)</li>
                                <li><i class="ti-email"></i>info@example.com</li>
                            </ul>
                        </div>
                        <h5 class="m-t0 m-b20">Follow Us</h5>
                        <ul class="list-inline contact-social-bx">
                            <li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    @if (session('success'))
                        <h4 class="alert alert-success text center">{{ session('success') }}</h4>
                    @endif
                    <form action={{route('contact.save')}} class="contact-bx -form" enctype="multipart/form-data"
                        method="post">
                        @csrf
                        <div class="ajax-message"></div>
                        <div class="heading-bx left">
                            <h2 class="title-head">Get In <span>Touch</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page</p>
                        </div>
                        <div class="row placeani">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Your Name</label>
                                        <input name="name" type="text" class="form-control valid-character">
                                        @error('name')
                                            <div class="alert alert-danger m-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Your Email Address</label>
                                        <input name="email" type="email" class="form-control">
                                        @error('email')
                                            <div class="alert alert-danger m-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Subject</label>

                                        <input name="subject" type="text" class="form-control">
                                        @error('subject')
                                            <div class="alert alert-danger m-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Type Message</label>

                                        <textarea name="message" rows="4" class="form-control"></textarea>
                                        @error('message')
                                            <div class="alert alert-danger m-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <input type="submit" value="submit" class="btn button-md">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    </div>



    <!-- Footer Start -->
    @include('temp.footer')
@endsection
