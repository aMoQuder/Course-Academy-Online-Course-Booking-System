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
                                        <h5>Basic Form Input about course in kian</h5>
                                        <span>Add class of <code>.of kian</code> with <code>it's course</code> </span>


                                    </div>


                                    <form enctype="multipart/form-data" action="{{ route('storeCourse') }}" method="post">
                                        @csrf
                                        <div class="card-block" id="form1">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <div class="d-flex ">
                                                                <a href="">
                                                                    <h4 class="sub-title "
                                                                        style="border-bottom: 1px solid #134bcd;">
                                                                        information course </h4>
                                                                </a>
                                                                <a href="">
                                                                    <h4 class="sub-title mx-5 ">img course and
                                                                        description</h4>
                                                                </a>
                                                                <a href="">
                                                                    <h4 class="sub-title">video course and description
                                                                    </h4>
                                                                </a>
                                                            </div>
                                                            <input type="text" class="form-control " placeholder="id"
                                                                name="id">
                                                            @error('id')
                                                                <div class="alert alert-danger my-2">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mobile-inputs">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control " name="number_hour"
                                                            placeholder="Enter Number of course">
                                                        @error('number_hour')
                                                            <div class="alert alert-danger my-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>


                                                </div>
                                                <div class="col-sm-6 mobile-inputs">
                                                    {{-- <h4 class="sub-title">first section of course</h4> --}}
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" placeholder="free"
                                                                name="price">

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Enter course name">
                                                    @error('name')
                                                        <div class="alert alert-danger my-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">description in home </label>
                                                <div class="col-sm-10">
                                                    <textarea rows="5" name="description" cols="5" class="form-control" placeholder="Enter your description"></textarea>
                                                    @error('description')
                                                        <div class="alert alert-danger my-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">instructore</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="parent_id">
                                                        @foreach ($instructores as $item )

                                                            <option value="{{$item->id}}"> {{$item->name}}</option>
                                                        @endforeach

                                                    </select>
                                                    @error('parent_id')
                                                        <div class="alert alert-danger my-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">img and description </label>
                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <!-- Multiple Open Accordion start -->
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-header-text">to create image in course
                                                                    </h5>
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

                                                                                        <div class="col-md-4">
                                                                                            <div class="p-2">




                                                                                                <div
                                                                                                    class="form-group row">

                                                                                                    <div
                                                                                                        class="col-sm-10 m-auto ">
                                                                                                        <input
                                                                                                            type="file"
                                                                                                            name="imgHome"
                                                                                                            id="image" accept="image/*"
                                                                                                            class="form-control m-auto"
                                                                                                            >
                                                                                                        <br>
                                                                                                        <img src="#"
                                                                                                            class="w-100"
                                                                                                            id="preview"
                                                                                                            style="height: 220px;"
                                                                                                            alt="">
                                                                                                        @error('imgHome')
                                                                                                            <div
                                                                                                                class="alert alert-danger my-2">
                                                                                                                {{ $message }}
                                                                                                            </div>
                                                                                                        @enderror

                                                                                                    </div>

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-8">
                                                                                            <div
                                                                                                class="form-group row mt-3">
                                                                                                <label
                                                                                                    class="my-2 col-form-label">this
                                                                                                    descrption in page
                                                                                                    course</label>
                                                                                                <div class="col-sm-12">
                                                                                                    <textarea rows="7" cols="5" name="Bigdescription" class="form-control"
                                                                                                        placeholder="Enter your description"></textarea>
                                                                                                    @error('Bigdescription')
                                                                                                        <div
                                                                                                            class="alert alert-danger my-2">
                                                                                                            {{ $message }}
                                                                                                        </div>
                                                                                                    @enderror
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
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">video and what you learn </label>
                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <!-- Multiple Open Accordion start -->
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-header-text">to create vidue and benfit
                                                                        in bage course
                                                                    </h5>
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
                                                                                        href="#collapseOne2"
                                                                                        aria-expanded="true"
                                                                                        aria-controls="collapseOne">
                                                                                        click here
                                                                                    </a>
                                                                                </h3>
                                                                            </div>
                                                                            <div id="collapseOne2"
                                                                                class="panel-collapse collapse in"
                                                                                role="tabpanel"
                                                                                aria-labelledby="headingOne">
                                                                                <div
                                                                                    class="accordion-content accordion-desc">
                                                                                    <div class="row">

                                                                                        <div class="col-md-4">
                                                                                            <div class="form-group row">
                                                                                                <div class="col-sm-10">
                                                                                                    <label
                                                                                                        class=" col-form-label">vidue
                                                                                                        in course</label>
                                                                                                    <input type="file"
                                                                                                        name="vidueCourse"
                                                                                                        class="form-control"
                                                                                                        accept="video/*"
                                                                                                        onchange="previewVideo(event)">
                                                                                                    @error('vidueCourse')
                                                                                                        <div
                                                                                                            class="alert alert-danger my-2">
                                                                                                            {{ $message }}
                                                                                                        </div>
                                                                                                    @enderror
                                                                                                    <a onclick="openFullscreen() "
                                                                                                        class="vidueopen"
                                                                                                        target="_blank" style="    top: 61%;
                                                                                                        padding-left: 6px;
                                                                                                        padding-top: 0px;
                                                                                                        font-size: 28px;"><i
                                                                                                            class="fa fa-play"></i></a>

                                                                                                    <video
                                                                                                        id="videoPreview"
                                                                                                        alt=""
                                                                                                        width="400"
                                                                                                        class="w-100 bg-dark mt-2 "
                                                                                                        style="height: 250px;"
                                                                                                        >
                                                                                                        <source
                                                                                                            id="videoSource"
                                                                                                            src=""
                                                                                                            type="">
                                                                                                        Your browser does
                                                                                                        not support the
                                                                                                        video tag.
                                                                                                    </video>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-8">
                                                                                            <div
                                                                                                class="form-group row mt-4">
                                                                                                <div class="col-sm-12">
                                                                                                    <label
                                                                                                        class=" col-form-label">
                                                                                                        what will you achive
                                                                                                    </label>
                                                                                                    <textarea rows="7" cols="5" name="benfit" class="form-control" placeholder="Enter your benfit"></textarea>
                                                                                                    @error('benfit')
                                                                                                        <div
                                                                                                            class="alert alert-danger my-2">
                                                                                                            {{ $message }}
                                                                                                        </div>
                                                                                                    @enderror
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

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">submit </label>

                                                <div class="col-sm-10">
                                                    <button class="form-control btn btn-outline-primary ">
                                                        store
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                    </form>




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
