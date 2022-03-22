@extends('layouts.master')


@section('title')
    Clients
@stop

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Client table</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Page Title</li>
                </ol>
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
    @if (session('delete'))
        <div class="alert alert-danger">
            {{ session('delete') }}
        </div>
    @endif
    @if (session('update'))
        <div class="alert alert-primary">
            {{ session('update') }}
        </div>
    @endif
    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">

                <div class="card-header pb-0">

                    @can('Add_Client')
                        <a class="btn btn-primary btn-sm" href="{{ route('Client.create') }}">Add_Client</a>
                    @endcan
                    @can('Excel_Export_C')
                        <a class="modal-effect btn btn-sm btn-primary" href="{{ url('client_export') }}"
                            style="color:white"><i class="ti-export"></i> Excel_Export_C</a>
                    @endcan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-10p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-20p border-bottom-0"> National_ID</th>
                                    <th class="wd-20p border-bottom-0"> The_Test_Result</th>
                                    <th class="wd-20p border-bottom-0">Status </th>
                                    <th class="wd-20p border-bottom-0"> categorie_id</th>

                                    <th class="wd-10p border-bottom-0">Processes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @foreach ($Clients as $Client)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $Client->Name }}</td>
                                        <td>{{ $Client->National_ID }}</td>

                                        <td>
                                            <a href="{{ route('Client.show', $Client->id) }}"
                                                class="btn btn-outline-success" data-toggle=""
                                                data-target="">The_Test_Result</a>
                                        </td>
                                        <td>{{ $Client->Categorie->name }}</td>
                                        <td>


                                            @if ($Client->Status == 'مفعل')
                                                <span class="text-success">{{ $Client->Status }}</span>
                                            @else
                                                <span class="text-danger ">{{ $Client->Status }}</span>
                                            @endif
                                        </td>


                                        <td>
                                            @can('Edite_C')
                                                <a href="{{ route('Client.edit', $Client->id) }}"
                                                    class="btn btn-outline-success" data-toggle="" data-target="">Edite_C</a>
                                            @endcan
                                            @can('Delete_C')
                                                <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                    data-target="#modaldemo8{{ $Client->id }}">Delete_C</button>
                                            @endcan



                                        </td>
                                    </tr>
                                    @include('Client.delete')
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
    <!-- row closed -->
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
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>

    <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
    <script>
        $('#modaldemo8').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var user_id = button.data('id')

            var modal = $(this)
            modal.find('.modal-body #id').val(user_id);

        })
    </script>
@endsection
