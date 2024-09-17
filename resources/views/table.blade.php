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
                            <h5 class="m-b-10">Bootstrap Basic Tables</h5>
                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Bootstrap Tables</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Basic Tables</a>
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
                @if (session('massege'))
                    <h3 class="alert alert-alert-primary text-center">{{ session('massege') }} </h3>
                @endif
                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        @if ($table== 'user')
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
                                                    <th>E-mail</th>
                                                    <th>Role</th>
                                                    <th>Status</th>
                                                    <th>operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($hatem as $item)
                                                    <tr>
                                                        <th>{{ $item->id }}</th>
                                                        <th>{{ $item->name }}</th>
                                                        <th>{{ $item->email }}</th>

                                                        <th>{{ $item->role }}</th>
                                                        <th>{{ $item->status }}</th>
                                                        <th>
                                                            <div style="display: flex">
                                                                <a href={{ route('users.edit', $item->id) }}
                                                                    style="color: rgb(81, 255, 0)" class="mx-3">edit
                                                                </a>
                                                                <a href={{ route('users.delete', $item->id) }}
                                                                    style="color: red">delet</a>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @elseif ($table == 'contact')
                            <div class="card">
                                <div class="card-header">
                                    <h5>the Contact in kian academy</h5>
                                    <span>this table is represnt <code>Contact</code>which is available in <code>kian</code>
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



                                    <div class="table-responsive">
                                        <table class="table table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>E-mail</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ahmed as $item)
                                                    <tr>
                                                        <th>{{ $item->id }}</th>
                                                        <th>{{ $item->name }}</th>
                                                        <th>{{ $item->email }}</th>
                                                        <th>{{ $item->subject }}</th>
                                                        <th>{{ $item->message }}</th>
                                                        <th>
                                                            <div style="display: flex">
                                                                <a href={{ route('contact.delete', $item->id) }}         class="accordion-msg waves-effect waves-dark  text-danger" >delete</a>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @else
                            <!-- Basic table card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{__('language.basic_table_of_event')}}</h5>
                                    <span>{{__('language.table_represent_event')}}</span>
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
                                    <a href={{ route('events.create') }}
                                        class="btn text-center btn-outline-dark my-2 btn-block w-100 mr-5  ">
                                        {{__('language.create_new_event')}}
                                    </a>

                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th>{{__('language.id')}}</th>
                                                    <th>{{__('language.event_img')}}</th>
                                                    <th>{{__('language.title')}}</th>
                                                    <th>{{__('language.description')}}</th>
                                                    <th>{{__('language.action')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($event as $item)
                                                    <tr>
                                                        <th>{{ $item->id }}</th>
                                                        <th><img src={{ asset('Events/img/' . $item->event_img) }}
                                                                style="height: 60px;width: 60px"></th>
                                                        <th>{{ $item->title }}</th>
                                                        <th>{{ $item->description }}</th>
                                                        <th>
                                                            <div class="d-flex ">
                                                                <a href={{ route('events.edit', $item->id) }}
                                                                    class="text-success mx-4"><i class="fa-solid fa-pen"></i>
                                                                </a>
                                                                <a href={{ route('events.delete', $item->id) }}
                                                                    class="text-danger"><i class="fa-solid fa-trash"></i></a>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Basic table card end -->

                            <!-- Inverse table card of instructore -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{__('language.basic_table_of_instructor')}}</h5>
                                    <span>{{__('language.table_represent_instructor')}}
                                    </span>
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

                                    <a href="{{ route('createInstructor') }}"
                                        class="btn text-center btn-outline-primary my-2 btn-block w-100 mr-5  ">
                                        {{__('language.create_new_instructor')}}
                                    </a>

                                    <div class="table-responsive">
                                        <table class="table table-dark text-center">
                                            <thead>
                                                <tr>
                                                    <th>{{__('language.ID')}}</th>
                                                    <th>{{__('language.NAME')}}</th>
                                                    <th>{{__('language.PHONE')}}</th>
                                                    <th>{{__('language.Course')}}</th>

                                                    <th>{{__('language.Operation')}}</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($instructores as $instructore)
                                                    <tr>
                                                        <th>{{ $instructore->id }}</th>
                                                        <th>{{ $instructore->name }}</th>
                                                        <th>{{ $instructore->phone }}</th>
                                                        <th>{{ $instructore->your_job }}</th>

                                                        <td class="" style="width:7%;">
                                                            <div class="d-flex justify-content-center w-50 m-auto">

                                                                <form action="{{ route('showInstructor') }}"
                                                                    enctype="multipart/form-data" method="post">
                                                                    @csrf
                                                                    <input type="hidden" value="{{ $instructore->id }}"
                                                                        name="id">
                                                                    <button type="submit" style="background-color: #212529;" value=""
                                                                    class="btn text-primary">
                                                                    <i class="ti-user"></i>                                                                    </button>
                                                                </form>

                                                                {{-- <form action="{{route('editInstructor')}}" enctype="multipart/form-data" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{$instructore->id}}" name="old_id">
                                                            <button type="submit" value="" class="btn btn-warning mx-2">
                                                               edit
                                                            </button>
                                                        </form> --}}
                                                                <a href="{{ route('update', $instructore->id) }}"
                                                                    class="btn text-warning " style="background-color: #212529;">
                                                                    <i class="fa-solid fa-pen"></i>
                                                                </a>

                                                                <form action="{{ route('deletInstructor') }}"
                                                                    enctype="multipart/form-data" method="post">
                                                                    @csrf
                                                                    <input type="hidden" value="{{ $instructore->id }}"
                                                                        name="old_id">
                                                                    <button type="submit" style="background-color: #212529;" value=""
                                                                    class="btn  text-danger">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Inverse table card end -->

                            <!-- Hover table card of course -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{__('language.basic_table_of_courses')}}</h5>
                                    <span>{{__('language.table_represent_courses')}}</span>
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
                                    <a href="{{ route('createCourse') }}"
                                        class="btn my-2 text-center btn-outline-success btn-block w-100 mr-5  ">
                                        {{__('language.create_new_courses')}}
                                    </a>


                                    <div class="table-responsive">
                                        <table class="table table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th>{{__('language.ID1')}}</th>
                                                    <th>{{__('language.course')}}</th>
                                                    <th> {{__('language.price')}}</th>
                                                    <th> {{__('language.instractore')}}</th>
                                                    <th>{{__('language.operation')}}</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($result as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->price }}</td>
                                                        <td>
                                                            @foreach ($instructores as $item2)
                                                                @if ($item->parent_id == $item2->id)
                                                                    {{ $item2->name }}
                                                                @endif
                                                            @endforeach
                                                        </td>

                                                        <td class="" style="width:7%;">
                                                            <div class="d-flex justify-content-center w-50 m-auto">

                                                                <form action={{ route('showCourse') }} method="post"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" value="{{ $item->id }}"
                                                                        name="id">
                                                                    <button type="submit" value=""
                                                                    class="btn btn-light text-primary ">
                                                                    <i class="ti-receipt"></i>
                                                                    </button>
                                                                </form>
                                                                {{--
                                                            <form action="{{route('edit')}}" method="post" enctype="multipart/form-data" >
                                                                @csrf
                                                                <input type="hidden" value="{{$item->id}}" name="old_id">
                                                                <button type="submit" value="" class="btn btn-warning mx-2">
                                                                   edit
                                                                </button>
                                                            </form> --}}
                                                                <a href="{{ route('edit', $item->id) }}"
                                                                    class="btn btn-light text-warning ">
                                                                    <i class="fa-solid fa-pen"></i></a>

                                                                <form action="{{ route('delet') }}"
                                                                    enctype="multipart/form-data" method="post">
                                                                    @csrf
                                                                    <input type="hidden" value="{{ $item->id }}"
                                                                        name="old_id">
                                                                    <button type="submit" value=""
                                                                    class="btn btn-light text-danger">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                                </form>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
            <!-- Main-body end -->


        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
