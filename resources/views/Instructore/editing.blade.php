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
                                <!-- Basic Form Inputs card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Basic Form Input about instructor in kian</h5>
                                        <span>this form for <code>instructor </code> with <code>kian academy</code> </span>


                                    </div>

                                    <div class="card-block">
                                        <form action="{{ route('saveInstuctore') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" value="{{$result->id}}" name="old_id">
                                                <div class="col-md-8">

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">id</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="id" class="form-control"
                                                                value="{{ $result->id }}">
                                                                @error('id')
                                                                <div class="alert alert-danger my-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $result->name }}">

                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">phone</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="phone" class="form-control"
                                                                value="{{ $result->phone }}">

                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">your content</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="your_job" class="form-control"
                                                                value="{{ $result->your_job }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">facebook</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="facebook" class="form-control"
                                                                value="{{ $result->facebook }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">linked in</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="linked_in" class="form-control"
                                                                value="{{ $result->linked_in }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">instagram</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="instagram" class="form-control"
                                                                value="{{ $result->instagram }}">
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

                                                                                        <div class="form-group row my-2 ">
                                                                                            <div class="col-sm-12">
                                                                                                <input type="file" name="img" class="form-control m-auto">

                                                                                            </div>
                                                                                            <input type="hidden" value="{{$result->img}}" name="img1">
                                                                                        </div>
                                                                                        <br>
                                                                                        <img src="{{asset('/Instructore/img/'.$result->img)}}"class="w-100 "   style="height: 200px;" alt="">

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

                                            <div class="form-group row">

                                                <div class="col-sm-12">
                                                    <input type="submit" name="sub"
                                                        class="form-control btn btn-outline-primary " value="editing">
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
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
