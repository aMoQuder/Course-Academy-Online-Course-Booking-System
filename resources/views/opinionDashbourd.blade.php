{{--

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
                        <div class="card">
                            <div class="card-header">
                                <h5>the Users in kian academy</h5>
                                <span>this table is represnt <code>Users</code>which is available in <code>kian</code>
                                    academy </span>
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
                            <div class="card-block table-border-style">
                                <a href={{ route('users.create') }}
                                    class="btn my-2 text-center btn-outline-success btn-block w-100 mr-5  ">
                                    create new User
                                </a>


                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>opinion</th>
                                                <th>operation</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $item)
                                                @if ($item->opinion != 'noOpinion')
                                                    <!-- Multiple Open Accordion start -->



                                                    <tr>
                                                        <th>{{ $item->id }}</th>
                                                        <th>{{ $item->name }}</th>
                                                        <th class="w-50">{{ $item->opinion }}</th>
                                                        <th class="d-flex justify-content-around">

                                                            <a class="accordion-msg waves-effect waves-dark text-primary"
                                                                data-toggle="collapse" data-parent="#accordion"
                                                                href="#collapseOne{{ $item->id }}" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                Edit
                                                            </a>
                                                            <a href="{{ route('deleteopinion', $item->id) }}"
                                                                class="accordion-msg waves-effect waves-danger text-danger">
                                                                delete
                                                            </a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <div class="card">

                                                            <div class="card-block accordion-block">
                                                                <div id="accordion" role="tablist"
                                                                    aria-multiselectable="true">
                                                                    <div class="accordion-panel">

                                                                        <div id="collapseOne{{ $item->id }}"
                                                                            class="panel-collapse collapse in"
                                                                            role="tabpanel" aria-labelledby="headingOne">
                                                                            <div class="accordion-content accordion-desc">
                                                                                <div class="row">
                                                                                    <form action="{{ route('addopinion') }}" method="post" enctype="multipart/form-data">
                                                                                        @csrf
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group row mt-3">
                                                                                            <div class="d-flex justify-content-between w-100 px-3 my-2 " >

                                                                                                <h5 class="mt-1"> this is opinion of {{$item->name }}</h5>
                                                                                                <a class="accordion-msg waves-effect waves-dark bg-danger px-3 py-2"
                                                                                                data-toggle="collapse" data-parent="#accordion"
                                                                                                href="#collapseOne{{ $item->id }}" aria-expanded="true"
                                                                                                aria-controls="collapseOne">
                                                                                                close
                                                                                            </a>

                                                                                            </div>
                                                                                            <div class="col-sm-12">
                                                                                                <textarea rows="7" cols="5" name="opinion" class="form-control" placeholder="{{ $item->opinion }}"></textarea>

                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group row">

                                                                                            <div class="col-sm-12">
                                                                                                <input type="submit"
                                                                                                    class="form-control btn btn-outline-primary ">
                                                                                                    edit
                                                                                                </input>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
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
@endsection --}}
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
        @if (session('massege'))
            <h3 class="alert alert-alert-primary text-center">{{ session('massege') }} </h3>
        @endif
        <!-- Page-header end -->
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="card">
                            <div class="card-header">
                                <h5>the Users in kian academy</h5>
                                <span>this table is represnt <code>Users</code>which is available in <code>kian</code>
                                    academy </span>
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
                            <div class="card-block table-border-style">
                                <a href={{ route('users.create') }}
                                    class="btn my-2 text-center btn-outline-success btn-block w-100 mr-5">
                                    create new User
                                </a>

                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>opinion</th>
                                                <th>operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $item)
                                                @if ($item->opinion != 'noOpinion')
                                                    <tr id="row-{{ $item->id }}">
                                                        <th>{{ $item->id }}</th>
                                                        <th>{{ $item->name }}</th>
                                                        <th class="w-50">{{ $item->opinion }}</th>

                                                        <th class="d-flex justify-content-around">
                                                            <a class="accordion-msg waves-effect waves-dark edit-btn text-primary"
                                                                data-toggle="collapse"
                                                                href="#collapseOne{{ $item->id }}" aria-expanded="true"
                                                                aria-controls="collapseOne{{ $item->id }}">
                                                                Edit
                                                            </a>
                                                            <a href="{{ route('deleteopinion', $item->id) }}"
                                                                class="accordion-msg waves-effect waves-danger text-danger">
                                                                delete
                                                            </a>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <div id="collapseOne{{ $item->id }}"
                                                                class="panel-collapse collapse" role="tabpanel">
                                                                <div class="accordion-content accordion-desc">
                                                                    <form action="{{ route('addopiniondash') }}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <input type="hidden"
                                                                                value="{{ $item->id }}" name="id">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group row mt-3">
                                                                                  <h5 class="p-3"> this is opinion of {{$item->name}}</h5>

                                                                                    <div class="col-sm-12">
                                                                                        <textarea rows="7" cols="5" name="opinion" class="form-control" placeholder="my opinion about Kian is : {{ $item->opinion }}"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">

                                                                                    <div class="col-sm-12">
                                                                                        <input type="submit"
                                                                                            class="form-control btn btn-outline-primary "
                                                                                            value="Edit">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
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
@endsection
