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
                            <!-- Inverse table card start -->
                            @if (session('massege'))
                            <h3 class="alert alert-alert-primary text-center">{{ session('massege') }} </h3>
                        @endif
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Dark Table</h5>
                                        <span>use class <code>table-dark</code> inside table element</span>
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
                                        <div class="table-responsive">
                                            <table class="table table-dark text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Username</th>
                                                        <th>phone</th>
                                                        <th>course booking</th>
                                                        <th>delete</th>
                                                        <th>case</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($book as $item)
                                                        <tr>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->phone }}</td>
                                                            <td>{{ $item->course }}</td>
                                                            <td> <a href="{{route("deletbook",$item->id)}}" style="font-size: 20px;"
                                                                class="text-danger text-center"><i
                                                                    class="fa fa-trash close-card"></i></a>

                                                        </td>
                                                            <td class="text-center d-flex justify-content-center">
                                                                @if ($item->nafigation == 0)
                                                                    <a href="{{ route('showbooking', $item->id) }}">
                                                                        <h6 class="f-w-700"><i
                                                                                class="fas fa-level-down-alt text-c-red mt-2"></i>
                                                                        </h6>

                                                                    </a>
                                                                @elseif($item->nafigation == 1)
                                                                    <a href="{{ route('showbooking', $item->id) }}">
                                                                        <h6 class="f-w-700"><i
                                                                                class="fas fa-level-down-alt text-c-blue mt-2"></i>
                                                                        </h6>

                                                                    </a>
                                                                @elseif($item->nafigation == 2)
                                                                    <a href="{{ route('showbooking', $item->id) }}">
                                                                        <h6 class="f-w-700"><i
                                                                                class="fas fa-level-up-alt text-c-green mt-2"></i>
                                                                        </h6>

                                                                    </a>
                                                                @endif
                                                            </td>

                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Inverse table card end -->

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
