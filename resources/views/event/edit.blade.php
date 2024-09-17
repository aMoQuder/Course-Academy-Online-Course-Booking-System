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

                                    <div class="card-block">
                                        <form enctype="multipart/form-data" action={{route('events.save')}}
                                            method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $events->id }}" name="old_id">
                                            <input type="hidden" value="{{ $events->description }}" name="old_description">
                                            <input type="hidden" value="{{ $events->event_img }}" name="old_img">
                                            <div class="row">
                                                <div class="col-sm-12">

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <h4 class="sub-title">information course</h4>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-12 mobile-inputs">
                                                    {{-- <h4 class="sub-title">first section of course</h4> --}}

                                                    <div class="form-group row">

                                                        <div class="col-md-12">
                                                            <input type="id" value="{{ $events->id }}" placeholder="id" class="form-control "
                                                                name="id">
                                                            @error('id')
                                                                <div class="alert alert-danger my-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">title of event</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="{{ $events->title }}" name="title" class="form-control"
                                                        placeholder="Enter event title ">
                                                    @error('title')
                                                        <div class="alert alert-danger my-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">image of event </label>
                                                <div class="col-sm-10">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-header-text">to update image in event
                                                            </h5>
                                                        </div>
                                                        <div class="card-block accordion-block">
                                                            <div id="accordion" role="tablist" aria-multiselectable="true">
                                                                <div class="accordion-panel">
                                                                    <div class="accordion-heading" role="tab"
                                                                        id="headingOne">
                                                                        <h3 class="card-title accordion-title">
                                                                            <a class="accordion-msg waves-effect waves-dark"
                                                                                data-toggle="collapse"
                                                                                data-parent="#accordion" href="#collapseOne"
                                                                                aria-expanded="true"
                                                                                aria-controls="collapseOne">
                                                                                click here
                                                                            </a>
                                                                        </h3>
                                                                    </div>
                                                                    <div id="collapseOne" class="panel-collapse collapse in"
                                                                        role="tabpanel" aria-labelledby="headingOne">
                                                                        <div class="accordion-content accordion-desc">
                                                                            <div class="row">
                                                                               
                                                                                <div class="col-md-12">
                                                                                    <div class="p-2">
                                                                                        <img src="{{ asset('Events/img/' .$events->event_img ) }}"
                                                                                            class="w-100 "
                                                                                            style="height: 250px;"
                                                                                            alt="">


                                                                                        <h5
                                                                                            class="text-center my-2">
                                                                                            this
                                                                                            img in Event </h5>
                                                                                        <br>
                                                                                        <div
                                                                                            class="form-group row">

                                                                                            <div
                                                                                                class="col-sm-10 m-auto ">
                                                                                                <input
                                                                                                    type="file"
                                                                                                    name="event_img"
                                                                                                    class="form-control"
                                                                                                    value="{{  $events->event_img }}">

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
                                                <label class="col-sm-2 col-form-label">description in Event </label>

                                                <div class="col-sm-10">
                                                    <textarea rows="5" name="description" cols="5" class="form-control"
                                                        placeholder="{{ $events->description }}"></textarea>
                                                </div>
                                            </div>

                                    
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">submit </label>

                                                <div class="col-sm-10">
                                                    <button type="submit" name="sub"
                                                        class="form-control btn btn-outline-primary ">
                                                        store
                                                    </button>
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
