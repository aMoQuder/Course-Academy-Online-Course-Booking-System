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


                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>data course </h5>
                                                            <span>this table represent some of <code>data </code> of course
                                                                <code>{{ $result->name }} </code></span>
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
                                                                        <tr>
                                                                            <th>كود</th>
                                                                            <th>الاسم</th>
                                                                            <th> السعر</th>

                                                                            <th>الانستراكتور</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">{{ $result->id }}</th>
                                                                            <td>{{ $result->name }}</td>
                                                                            <td>{{ $result->price }}</td>

                                                                            <td> @foreach ($instructores as $item2)
                                                                                @if ($result->parent_id == $item2->id)
                                                                                    {{ $item2->name }}
                                                                                @endif
                                                                            @endforeach</td>


                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-12 p-2">
                                                            <div class="card">
                                                                <div class="card-block caption-breadcrumb">
                                                                    <div class="breadcrumb-header">
                                                                        <h5>description in bage course </h5>
                                                                        <span>{{ $result->Bigdescription }}</span>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <!-- Multiple Open Accordion start -->
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-header-text">all image in course
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
                                                                                        <div class="col-md-6">
                                                                                            <div class="p-3">
                                                                                                <h5
                                                                                                    class="text-center my-2">
                                                                                                    this vidue in bage
                                                                                                    course
                                                                                                </h5>
                                                                                                <video
                                                                                                    class="w-100 bg-dark "
                                                                                                    style="height: 250px;"
                                                                                                    alt=""
                                                                                                    src="{{ asset('Course/vidue/' . $result->vidueCourse) }}"
                                                                                                    controls>
                                                                                                </video>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="p-3">

                                                                                                <h5
                                                                                                    class="text-center my-2">
                                                                                                    this img in bage home
                                                                                                </h5>
                                                                                                <img src="{{ asset('/Course/img/' . $result->imgHome) }}"
                                                                                                    class="w-100 "
                                                                                                    style="height: 250px;"
                                                                                                    alt="">

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
                                                    <!-- Without-icon Breadcrumb card start -->


                                                    <div class="row">

                                                        <div class="col-md-12 p-2">
                                                            <div class="card">
                                                                <div class="card-block caption-breadcrumb">
                                                                    <div class="breadcrumb-header">
                                                                        <h5>Description in Home bage</h5>
                                                                        <span>{{ $result->description }}</span>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 p-2">
                                                            <div class="card">
                                                                <div class="card-block caption-breadcrumb">
                                                                    <div class="breadcrumb-header">
                                                                        <h5>what you learn</h5>
                                                                        <span>{{ $result->benfit }}</span>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>




                                                    <div class="pcoded-inner-content">
                                                        <div class="main-body">
                                                            <div class="page-wrapper">

                                                                <!-- Page-body start -->
                                                                <div class="page-body">
                                                                    <!-- Row start -->

                                                                    <!-- Without-icon Breadcrumb card start -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endsection















