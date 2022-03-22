@extends('layouts.master')
@section('css')

@section('title')
    User
@stop

<!-- Internal Data table css -->

<link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">User</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ User List
            </span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- row opened -->
<div class="row ">
    <div class="col-xl-12">
        <div class="card">

            {{-- <div class="col-sm-1 col-md-2">
                    @can('Add_User')
                        <a class="btn btn-primary btn-sm" href="{{ route('users.create') }}">Add_User</a>
                    @endcan
                    <a class="btn btn-primary btn-sm" href="{{ url('user_export') }}">Excel_Export</a>

                </div> --}}

            <div class="card-header pb-0">
                @can('Add_User')
                    <a href="{{ route('users.create') }}" class="modal-effect btn btn-sm btn-primary"
                        style="color:#fff"><i class="ti-plus"></i> Add_User</a>
                @endcan

                @can('Excel_Export_U')
                    <a class="modal-effect btn btn-sm btn-primary" href="{{ url('user_export') }}" style="color:white"><i
                            class="ti-export"></i> Excel_Export_U</a>
                @endcan
            </div>
            <br>




            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table key-buttons text-md-nowrap">
                        <thead>
                            <tr>
                                <th class="wd- border-bottom-0">#</th>
                                <th class="wd-border-bottom-0">Name</th>
                                <th class="wd- border-bottom-0">Email</th>
                                <th class="wd- border-bottom-0">Specialties</th>
                                <th class="wd- border-bottom-0">categories</th>
                                <th class="wd- border-bottom-0">Status</th>
                                <th class="wd- border-bottom-0">type</th>
                                <th class="wd- border-bottom-0">Processes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->Specialization->Name }}</td>
                                    <td>{{ $user->Categorie->name }}</td>
                                    <td>
                                        @if ($user->Status == 'مفعل')
                                            <span class="label text-success d-flex" style="font-size: 20px;">
                                                <div class="dot-label bg-success ml-1"></div>{{ $user->Status }}
                                            </span>
                                        @else
                                            <span class="label text-danger d-flex" style="font-size: 20px;">
                                                <div class="dot-label bg-danger ml-1"></div>{{ $user->Status }}
                                            </span>
                                        @endif
                                    </td>

                                    <td>
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $v)
                                                <label class="badge badge-success">{{ $v }}</label>
                                            @endforeach
                                        @endif
                                    </td>

                                    <td>
                                        @can('Edite')
                                            <a href="{{ route('users.edit', $user->id) }}"
                                                class="btn btn-outline-success" data-toggle="" data-target="">Edite</a>
                                        @endcan

                                        @can('Delete')
                                            <a href="#modaldemo8{{ $user->id }}" class="btn btn-outline-danger"
                                                data-toggle="modal" data-user_id="{{ $user->id }}"
                                                data-username="{{ $user->name }}">Delete</a>
                                        @endcan


                                        @include('users.delete')
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->

    <!-- Modal effects -->

</div>

</div>
<!-- /row -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
<!--Internal  Datatable js -->
<script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
<!--Internal  Notify js -->
<script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
<!-- Internal Modal js-->
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>

<script>
    $('#modaldemo8').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('id')
        var username = button.data('username')
        var modal = $(this)
        modal.find('.modal-body #user_id').val(user_id);
        modal.find('.modal-body #username').val(username);
    })
</script>


@endsection
