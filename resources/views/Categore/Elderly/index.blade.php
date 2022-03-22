@extends('layouts.master')
@section('css')

@section('title')
    Elderly
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Elderly table</h4>
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
                <div class="col-sm-1 col-md-2">


                </div>
                <br>
                <br>




                <div class="accordion plus-icon shadow">
                    <div class="acd-group">


                        <a href="#" class="acd-heading">{{ $Categorie->name }}</a>
                        <div class="acd-des">






                            <table class="table table-hover" id="example1" data-page-length='50'
                                style=" text-align: center;">
                                <thead>
                                    @can('Add_A_E')
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('Abdominal_Elderly.create') }}">Add_A_E</a>
                                    @endcan
                                    <tr>
                                        <th class="wd-10p border-bottom-0">#</th>
                                        <th class="wd-15p border-bottom-0">Ocean_Poison</th>
                                        <th class="wd-20p border-bottom-0">Client_id</th>
                                        <th class="wd-20p border-bottom-0"> Cause_Harm</th>
                                        <th class="wd-20p border-bottom-0"> Does_No_Harm</th>
                                        <th class="wd-20p border-bottom-0">Notes</th>


                                        <th class="wd-10p border-bottom-0">Processes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach ($Abdominal_Circumference as $Abdominal_Circumferences)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $Abdominal_Circumferences->Ocean_Poison }}</td>
                                            <td>{{ $Abdominal_Circumferences->Client->Name }}</td>
                                            <td>{{ $Abdominal_Circumferences->Cause_Harm }}</td>
                                            <td>{{ $Abdominal_Circumferences->Does_No_Harm }}</td>
                                            <td>{{ $Abdominal_Circumferences->Notes }}</td>





                                            <td>

                                                @can('Edite_A_E')
                                                    <a href="{{ route('Abdominal_Elderly.edit', $Abdominal_Circumferences->id) }}"
                                                        class="btn btn-outline-success" data-toggle=""
                                                        data-target="">Edite_A_E</a>
                                                @endcan
                                                @can('Delete_A_E')
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                        data-target="#modaldemo8{{ $Abdominal_Circumferences->id }}">Delete_A_E</button>
                                                @endcan

                                            </td>
                                        </tr>
                                        @include(
                                            'Categore.Elderly.Abdominal_Circumference.delete'
                                        )
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <table class="table table-hover" id="example1" data-page-length='50'
                                style=" text-align: center;">
                                <thead>
                                    @can('Add_F_E')
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('Fat_Elderly.create') }}">Add_F_E</a>
                                    @endcan

                                    <tr>
                                        <th class="wd-10p border-bottom-0">#</th>
                                        <th class="wd-15p border-bottom-0">The_Ratio</th>
                                        <th class="wd-20p border-bottom-0">Client_number</th>
                                        <th class="wd-20p border-bottom-0"> Fat_Type</th>
                                        <th class="wd-20p border-bottom-0"> You_Need_Medical_Advice</th>
                                        <th class="wd-20p border-bottom-0"> You_Do_Not_Need</th>
                                        <th class="wd-20p border-bottom-0">Notes</th>


                                        <th class="wd-10p border-bottom-0">Processes</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach ($Fat_Percentage as $Fat_Percentages)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $Fat_Percentages->The_Ratio }}</td>
                                            <td>{{ $Fat_Percentages->ClientNumber->Name }}</td>
                                            <td>{{ $Fat_Percentages->Fat_Type }}</td>
                                            <td>{{ $Fat_Percentages->You_Need_Medical_Advice }}</td>
                                            <td>{{ $Fat_Percentages->You_Do_Not_Need_Medical_Advice }}</td>
                                            <td>{{ $Fat_Percentages->Notes }}</td>





                                            <td>

                                                @can('Edite_F_E')
                                                    <a style="margin-bottom: 10px;"
                                                        href="{{ route('Fat_Elderly.edit', $Fat_Percentages->id) }}"
                                                        class="btn btn-outline-success" data-toggle=""
                                                        data-target="">Edite_F_E</a>
                                                @endcan
                                                @can('Delete_F_E')
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                        data-target="#modaldemo8{{ $Fat_Percentages->id }}">Delete_F_E</button>
                                                @endcan
                                            </td>
                                        </tr>
                                        @include(
                                            'Categore.Elderly.Fat_Percentage.delete'
                                        )
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <table class="table table-hover" id="example1" data-page-length='50'
                                style=" text-align: center;">
                                <thead>
                                    @can('Add_H_E')
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('Height_Elderly.create') }}">Add_H_E</a>
                                    @endcan

                                    <tr>
                                        <th class="wd-10p border-bottom-0">#</th>
                                        <th class="wd-15p border-bottom-0">Height_Cm</th>
                                        <th class="wd-20p border-bottom-0">Client__Id</th>
                                        <th class="wd-20p border-bottom-0"> Natural</th>
                                        <th class="wd-20p border-bottom-0"> Abnormal</th>
                                        <th class="wd-20p border-bottom-0">Notes</th>


                                        <th class="wd-10p border-bottom-0">Processes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach ($Height as $Heights)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $Heights->Height_Cm }}</td>
                                            <td>{{ $Heights->ClientId->Name }}</td>
                                            <td>{{ $Heights->Natural }}</td>
                                            <td>{{ $Heights->Abnormal }}</td>
                                            <td>{{ $Heights->Notes }}</td>





                                            <td>

                                                @can('Edite_H_E')
                                                    <a href="{{ route('Height_Elderly.edit', $Heights->id) }}"
                                                        class="btn btn-outline-success" data-toggle=""
                                                        data-target="">Edite_H_E</a>
                                                @endcan
                                                @can('Delete_H_E')
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                        data-target="#modaldemo8{{ $Heights->id }}">Delete_H_E</button>
                                                @endcan
                                            </td>
                                        </tr>
                                        @include('Categore.Elderly.Height.delete')
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <table class="table table-hover" id="example1" data-page-length='50'
                                style=" text-align: center;">
                                <thead>
                                    @can('Add_W_E')
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('Weight_Elderly.create') }}">Add_W_E</a>
                                    @endcan
                                    <tr>
                                        <th class="wd-10p border-bottom-0">#</th>
                                        <th class="wd-15p border-bottom-0"> Weight_kg</th>
                                        <th class="wd-20p border-bottom-0">id_Client </th>
                                        <th class="wd-20p border-bottom-0"> Plus</th>
                                        <th class="wd-20p border-bottom-0"> Minus</th>
                                        <th class="wd-20p border-bottom-0">Needs-A-Diet</th>
                                        <th class="wd-20p border-bottom-0">Needs_Nourishment</th>
                                        <th class="wd-20p border-bottom-0"> Notes</th>


                                        <th class="wd-10p border-bottom-0">Processes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach ($Weight as $Weights)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $Weights->Weight_kg }}</td>
                                            <td>{{ $Weights->id_Client }}</td>
                                            <td>{{ $Weights->Plus }}</td>
                                            <td>{{ $Weights->Minus }}</td>
                                            <td>{{ $Weights->Needs_A_Diet }}</td>
                                            <td>{{ $Weights->Needs_Nourishment }}</td>
                                            <td>{{ $Weights->Notes }}</td>





                                            <td>

                                                @can('Edite_W_E')
                                                    <a href="{{ route('Weight_Elderly.edit', $Weights->id) }}"
                                                        class="btn btn-outline-success" data-toggle=""
                                                        data-target="">Edite_W_E</a>
                                                @endcan
                                                @can('Delete_W_E')
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                        data-target="#modaldemo8{{ $Weights->id }}">Delete_W_E</button>
                                                @endcan
                                            </td>
                                        </tr>
                                        @include('Categore.Elderly.Weight.delete')
                                    @endforeach
                                </tbody>
                            </table>



                        </div>


                    </div>



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

<script>
    $('#modaldemo8').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('id')

        var modal = $(this)
        modal.find('.modal-body #id').val(user_id);

    })
</script>
@endsection
