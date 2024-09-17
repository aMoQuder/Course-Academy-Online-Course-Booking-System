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
                            <h5 class="m-b-10">About</h5>
                            <p class="m-b-0">Welcome to About you can control about of Kian</p>
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
                            <!-- Multiple Open Accordion start -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">all book of
                                            {{ $result->name }}</h5>
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
                                                            <div class="col-md-8">
                                                                <div class="p-3">
                                                                    <div class="card">
                                                                        <div class="card-block caption-breadcrumb">
                                                                            <div class="breadcrumb-header">
                                                                                <h5>Name</h5>
                                                                                <span>{{ $result->name }}</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="card">
                                                                        <div class="card-block caption-breadcrumb">
                                                                            <div class="breadcrumb-header">
                                                                                <h5>phone</h5>
                                                                                <span>{{ $result->phone }}</span>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="p-3">

                                                                    <h5
                                                                        class="text-center my-2">
                                                                        course {{ $result->course}}
                                                                    </h5>

                                                                    @foreach ($course as$item )
                                                                    @if ($result->course==$item->name )

                                                                    <img src="{{ asset('/Course/img/' . $item->imgHome) }}"
                                                                        class="w-100 mt-3"
                                                                        style="height: 200px;"
                                                                        alt="">
                                                                        @endif

                                                                    @endforeach


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">

                                                            <div class="col-sm-12">
                                                                <a href="{{route('looking',$result->id)}}" class="form-control btn btn-outline-success ">
                                                                    showed
                                                                </a>
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
                                </div>
                            </div>
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
