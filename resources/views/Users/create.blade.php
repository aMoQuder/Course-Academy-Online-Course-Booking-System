{{-- //create --}}
@extends('layouts.dashbaord')

@section('content')
    @include('temp.navbar_dashboard')

    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Basic Form Inputs</h5>
                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">

                    <!-- Page body start -->
                    <div class="page-body">

                        <div class="row">
                            <div class="col-sm-12">

                                <section class="login-block">
                                    <!-- Container-fluid starts -->
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <form method="POST" enctype="multipart/form-data"
                                                    action={{ route('users.store') }} class="register-form"
                                                    id="register-form">
                                                    @csrf
                                                    <div class="auth-box card">

                                                        <div class="card-block">
                                                            <div class="row m-b-20">
                                                                <div class="col-md-12">
                                                                    <h3 class="text-center txt-primary">Sign up</h3>
                                                                    <div class="text-center">
                                                                        <img src={{ asset("assets/images/loading.gif") }}
                                                                            style="height: 100px; width: 120px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group form-primary">
                                                                <label class="float-label">Username</label>
                                                                <input type="text" name="name" class="form-control">
                                                                <span class="form-bar"></span>
                                                                @error('name')
                                                                    <div class="alert alert-danger m-2">{{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group form-primary">
                                                                <label class="float-label">Your Email Address</label>
                                                                <input type="text" name="email" class="form-control">
                                                                <span class="form-bar"></span>
                                                                @error('email')
                                                                    <div class="alert alert-danger m-2">{{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="float-label">your password</label>


                                                                <input type="password" class="form-control" name="password">
                                                                @error('password')
                                                                    <div class="alert alert-danger m-2">{{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>

                                                            <div style="display: flex; margin-right: 50px">

                                                                <input type="radio" name="role" value="user"
                                                                    checked>User
                                                                <input type="radio" name="role" class="ml-4"
                                                                    value="admin">Admin

                                                            </div>

                                                            <div style="display: flex; margin-right: 50px">

                                                                <input type="radio" name="status" value="active"
                                                                    checked>Active
                                                                <input type="radio" name="status" class="ml-4"
                                                                    value="block">Block

                                                            </div>



                                                            <div class="row m-t-30">
                                                                <div class="col-md-12">
                                                                    <input type="submit"
                                                                        class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"
                                                                        name="signup" id="signup" class="form-submit"
                                                                        value="Add user" />
                                                                </div>
                                                            </div>
                                                            <hr />
                                                            <div class="row">
                                                                <div class="col-md-10">
                                                                    <p class="text-inverse text-left m-b-0">Thank you.</p>
                                                                    <p class="text-inverse text-left"><a
                                                                            href="index.html"><b>Back to website</b></a></p>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <img src={{ asset("assets/images/loading.gif") }}
                                                                        style="height: 60px; width: 60px;">
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end of col-sm-12 -->
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                    <!-- end of container-fluid -->
                                </section>
                                <!-- Basic Form Inputs card end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
