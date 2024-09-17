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

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kian</title>
        <!-- Font Icon -->
        <link rel="stylesheet" href={{ asset('lo/fonts/material-icon/css/material-design-iconic-font.min.css') }}>

        <!-- Main css -->
        <link rel="stylesheet" href={{ asset('lo/css/style.css') }}>
    </head>

    <body>
        <section class="signup">
            <div class="container" style="margin-top: 2rem">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" enctype="multipart/form-data" action={{ route('users.save') }}
                            class="register-form" id="register-form">
                            @csrf
                            <input type="hidden" value="{{ $iprahim->id }}" name="old_id">
                            <div class="form-group ">
                                <label for="inputEmail4"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" value="{{ $iprahim->id }}" placeholder="ID" class="form-control"
                                    name="id">
                                @error('id')
                                    <div class="alert alert-danger m-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="inputPassword4"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" value="{{ $iprahim->name }}" placeholder="Name" class="form-control"
                                    name="name">
                                @error('name')
                                    <div class="alert alert-danger m-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputAddress"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" value="{{ $iprahim->email }}" placeholder="E-mail" class="form-control"
                                    name="email">
                                @error('email')
                                    <div class="alert alert-danger m-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputAddress"><i class="zmdi zmdi-opinion"></i></label>
                                <input type="text" value="{{ $iprahim->opinion }}" placeholder="opinion" class="form-control"
                                    name="opinion">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" value="{{ $iprahim->password }}" class="form-control"
                                    name="password">
                                @error('password')
                                    <div class="alert alert-danger m-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div style="display: flex; margin-right: 50px">

                                <input type="radio" name="role" value="user" checked>User
                                <input type="radio" name="role" value="admin">Admin

                            </div>

                            <div style="display: flex; margin-right: 50px">

                                <input type="radio" name="status" value="active" checked>Active
                                <input type="radio" name="status" value="block">Block

                            </div>


                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Edit Users" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src={{ asset('lo/images/signup-image.jpg') }} alt="sing up image"></figure>

                    </div>
                </div>
            </div>
        </section>
        <script src={{ asset('lo/vendor/jquery/jquery.min.js') }}></script>
        <script src={{ asset('lo/js/main.js') }}></script>
    </body>

    </html>
</div>
</div>
</div>
</div>
</div>
@endsection
