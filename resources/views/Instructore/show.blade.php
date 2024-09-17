@extends('layouts.dashbaord')

@section('content')
    @include('temp.navbar_dashboard')
                            <div class="pcoded-main-container">

                                <div class="pcoded-content">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="page-block">
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <div class="page-header-title">
                                                        <h5 class="m-b-10">Accordion</h5>
                                                        <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="breadcrumb">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Basic Components</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Accordion</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <div class="pcoded-inner-content">
                                        <div class="main-body">
                                            <div class="page-wrapper">

                                                <!-- Page-body start -->
                                                <div class="page-body">
                                                    <!-- Row start -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="pcoded-inner-content">
                                                                <!-- Main-body start -->
                                                                <div class="main-body">
                                                                    <div class="page-wrapper">
                                                                        <!-- Page-body start -->
                                                                        <div class="page-body">
                                                                            <!-- Basic table card start -->

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>the instructor in kian academy</h5>
                                        <span>this table is represnt <code>instructor</code> who work in  <code>kian</code> academy </span>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i>
                                                </li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <th>id</th>
                                                    <th>name</th>
                                                    <th>course</th>
                                                    <th>phone</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$result->id}}</td>
                                                        <td>{{$result->name}}</td>
                                                        <td>{{$result->your_job}}</td>
                                                        <td>{{$result->phone}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">all image in course
                                            {{$result->name}}</h5>
                                    </div>
                                    <div class="card-block accordion-block">
                                        <div id="accordion" role="tablist"
                                            aria-multiselectable="true">
                                            <div class="accordion-panel">
                                                <div class="accordion-heading" role="tab"
                                                    id="headingOne">
                                                    <h3 class="card-title accordion-title">
                                                        <a class="accordion-msg waves-effect waves-dark"
                                                            data-toggle="collapse"
                                                            data-parent="#accordion"
                                                            href="#collapseOne"
                                                            aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            click here
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapseOne"
                                                    class="panel-collapse collapse in"
                                                    role="tabpanel"
                                                    aria-labelledby="headingOne">
                                                    <div
                                                        class="accordion-content accordion-desc">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="p-3">
                                                                    <img src="{{asset('/Instructore/img/'.$result->img)}}"
                                                                        class="w-100 "
                                                                        style="height: 250px;"
                                                                        alt="">
                                                                    <h5
                                                                        class="text-center my-2">
                                                                        this {{$result->name}} img  in bage home
                                                                    </h5>
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

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Without-icon Breadcrumb card start -->
                                <div class="card">
                                    <div class="card-block caption-breadcrumb">
                                        <div class="breadcrumb-header">
                                            <h5>facebook of {{$result->name}} </h5>
                                            <span>{{$result->facebook}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!-- Without-icon Breadcrumb card start -->
                                <div class="card">
                                    <div class="card-block caption-breadcrumb">
                                        <div class="breadcrumb-header">
                                            <h5> linked in of {{$result->name}} </h5>
                                            <span>{{$result->linked_in}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!-- Without-icon Breadcrumb card start -->
                                <div class="card">
                                    <div class="card-block caption-breadcrumb">
                                        <div class="breadcrumb-header">
                                            <h5> instagram in of {{$result->name}} </h5>
                                            <span>{{$result->instagram}}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

@endsection


