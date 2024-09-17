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
                        <h5 class="m-b-10">Dashboard</h5>
                        <p class="m-b-0">Welcome to Material Able</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
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
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">

                        <!-- order-visitor start -->


                        <!-- order-visitor end -->

                        <!--  sale analytics start -->
                        <div class="col-xl-6 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Member’s performance</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                            <li><i class="fa fa-trash close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0 without-header">
                                            <tbody>
                                                @foreach ($instructores as $instructore)


                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <img src="{{ asset('/instructore/img/' . $instructore->img) }}" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                            <div class="d-inline-block">
                                                                <h6>{{$instructore->name}}</h6>
                                                                <p class="text-muted m-b-0">{{$instructore->your_job}}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <h6 class="f-w-700">{{$instructore->phone}}<i class="fas fa-level-up-alt text-c-green m-l-10"></i></h6>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <div class="row">
                                <!-- sale card start -->

                                <div class="col-md-6">
                                    <a href="{{route("contact")}}">
                                    <div class="card text-center order-visitor-card">

                                        <div class="card-block">
                                            <h6 class="m-b-0">Total contact </h6>
                                            <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>{{$contact->count()}}</h4>
                                            <p class="m-b-0">48% From Last 24 Hours</p>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route("user")}}">
                                        <div class="card text-center order-visitor-card">
                                            <div class="card-block">
                                                <h6 class="m-b-0">total user</h6>
                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>{{$user->count()}}</h4>
                                                <p class="m-b-0">36% From Last 6 Months</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-c-red total-card">
                                        <div class="card-block">
                                            <div class="text-left">
                                                <h4>{{$result->count()}}</h4>
                                                <p class="m-0">Total Course</p>
                                            </div>
                                            <span class="label bg-c-red value-badges">15%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-c-green total-card">
                                        <div class="card-block">
                                            <div class="text-left">
                                                <h4>{{$instructores->count()}}</h4>
                                                <p class="m-0">total instructore</p>
                                            </div>
                                            <span class="label bg-c-green value-badges">20%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('booking')}}">
                                    <div class="card text-center order-visitor-card">
                                        <div class="card-block">
                                            <h6 class="m-b-0">only it's of user </h6>
                                            <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>booking course</h4>
                                            <p class="m-b-0">Kian academy</p>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('opinionDashbourd')}}">
                                    <div class="card text-center order-visitor-card">
                                        <div class="card-block">
                                            <h6 class="m-b-0">click here to represent opinion</h6>
                                            <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i> opinion of user</h4>
                                            <p class="m-b-0">the last opinion in 10/5/2024</p>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <!-- sale card end -->
                            </div>
                        </div>

                        <!--  sale analytics end -->

                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection
