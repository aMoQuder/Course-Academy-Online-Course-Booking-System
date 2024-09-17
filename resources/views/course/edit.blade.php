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
                                        <h5>edit Form Input about course {{ $result->name }} </h5>
                                        <span>Add class of <code>.of kian</code> with <code>it's course</code> </span>


                                    </div>
                                    <div class="card-block">
                                        <form action="{{ route('save') }} " method="post" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" value="{{ $result->benfit }}" name="old_benfit">
                                            <input type="hidden" value="{{ $result->description }}"
                                                name="old_descriptionHome">
                                            <input type="hidden" value="{{ $result->Bigdescription }}"
                                                name="old_descriptionCourse">
                                            <input type="hidden" value="{{ $result->vidueCourse }}" name="old_vidueCourse">
                                            <input type="hidden" value="{{ $result->imgHome }}" name="old_imgHome">

                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <h4 class="sub-title">ID</h4>
                                                    <input type="hidden" value="{{ $result->id }}" name="old_id">
                                                    <input type="text" class="form-control " value="{{ $result->id }}"
                                                        name="id">
                                                    @error('id')
                                                        <div class="alert alert-danger my-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <h4 class="sub-title">price of {{ $result->name }}</h4>

                                                            <input type="text" class="form-control"
                                                                value="{{ $result->price }}" name="price">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mobile-inputs">
                                                    <div class="form-group">
                                                        <h4 class="sub-title">number of hours of {{ $result->name }}</h4>

                                                        <input type="text" class="form-control " name="number_hour"
                                                            value="{{ $result->number_hour }}">

                                                    </div>

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
                                                <label class="col-sm-2 col-form-label">وصف في الصفحة الرئيسية</label>

                                                <div class="col-sm-10">
                                                    <textarea rows="5" name="description_home" cols="5" class="form-control"
                                                        placeholder="{{ $result->description }}"></textarea>
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
                                                                    <h5 class="card-header-text">to update image in course
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

                                                                                        <div class="col-md-4">
                                                                                            <div class="p-2">
                                                                                                <img src="{{ asset('Course/img/' . $result->imgHome) }}"
                                                                                                    class="w-100 "
                                                                                                    style="height: 250px;"
                                                                                                    alt="">


                                                                                                <h5
                                                                                                    class="text-center my-2">
                                                                                                    this
                                                                                                    img in bage home </h5>
                                                                                                <br>
                                                                                                <div
                                                                                                    class="form-group row">

                                                                                                    <div
                                                                                                        class="col-sm-10 m-auto ">
                                                                                                        <input
                                                                                                            type="file"
                                                                                                            name="imgHome"
                                                                                                            class="form-control"
                                                                                                            value="{{ $result->imgHome }}">

                                                                                                    </div>

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-8">
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="my-2 col-form-label">this
                                                                                                    descrption in page
                                                                                                    course</label>
                                                                                                <div class="col-sm-12">
                                                                                                    <textarea rows="5" cols="5" name="description_course" class="form-control"
                                                                                                        placeholder="{{ $result->Bigdescription }}"></textarea>
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
                                                                    <h5 class="card-header-text">to update vidue and benfit
                                                                        in bage course
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
                                                                                                        accept="video/*"
                                                                                                        onchange="previewVideo(event)"
                                                                                                        name="vidueCourse"
                                                                                                        class="form-control mb-2">
                                                                                                    <a onclick="openFullscreen() "
                                                                                                        class="vidueopen"
                                                                                                        target="_blank"
                                                                                                        style="    top: 61%;
                                                                                                        padding-left: 6px;
                                                                                                        padding-top: 0px;
                                                                                                        font-size: 28px;"><i
                                                                                                            class="fa fa-play"></i></a>
                                                                                                    <video controls
                                                                                                        class="w-100 bg-dark "
                                                                                                        style="height: 250px;"
                                                                                                        alt=""
                                                                                                        id="videoPreview">
                                                                                                        <source
                                                                                                            id="videoSource"
                                                                                                            src="{{ asset('Course/vidue/' . $result->vidueCourse) }}"
                                                                                                            </video>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-8">
                                                                                            <div class="form-group row">
                                                                                                <label
                                                                                                    class="my-2 col-form-label">what
                                                                                                    you learn in this
                                                                                                    course</label>
                                                                                                <div class="col-sm-12">
                                                                                                    <textarea rows="5" cols="5" name="benfit" class="form-control" placeholder="{{ $result->benfit }}"></textarea>
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
                                                <label class="col-sm-2 col-form-label">Instructore</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="parent_id">
                                                        @foreach ($instructores as $item)
                                                            @if ($result->parent_id == $item->id)
                                                                <option value="{{ $item->id }}"> {{ $item->name }}
                                                                </option>
                                                            @endif

                                                        @endforeach
                                                        @foreach ($instructores as $item)
                                                            @if ($result->parent_id == $item->id)

                                                                @else

                                                                <option value="{{ $item->id }}"> {{ $item->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">editing </label>

                                                <div class="col-sm-10">
                                                    <input type="submit" name="sub"
                                                        class="form-control btn btn-outline-primary " value="save">
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
