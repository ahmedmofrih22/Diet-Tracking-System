@extends('layouts.master')
@section('css')

@section('title')
    Ceck Client
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Ceck Client table</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color"><a style="width: 150%;height:30px"
                            class="btn btn-primary btn-sm" href="{{ route('Client.index') }}">back</a></a></li>

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
        <div class="card" style="background:#000">
            <div class="card-header pb-0">



                <br>
                <br>
                <p><span style="coloer:red">Abdominal_Circumference</span> </p>
                <br>
                <table class="table table-hover" id="example1" data-page-length='50'>
                    <thead>

                        <tr>
                            <th class="wd-15p border-bottom-0">#</th>
                            <th class="wd-15p border-bottom-0">Ocean_Poison</th>
                            <th class="wd-20p border-bottom-0">Client_id</th>
                            <th class="wd-20p border-bottom-0"> Cause_Harm</th>
                            <th class="wd-20p border-bottom-0"> Does_No_Harm</th>
                            <th class="wd-20p border-bottom-0">Notes</th>


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


                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <br>
                <br>
                <p><span style="coloer:red">table_Fat</span> </p>
                <br>
                <table class="table table-hover" id="example1" data-page-length='50'>
                    <thead>

                        <tr>

                            <th class="wd-15p border-bottom-0">#</th>
                            <th class="wd-15p border-bottom-0">The_Ratio</th>
                            <th class="wd-20p border-bottom-0">Client_number</th>
                            <th class="wd-20p border-bottom-0"> Fat_Type</th>
                            <th class="wd-20p border-bottom-0"> You_Need_Medical_Advice</th>
                            <th class="wd-20p border-bottom-0"> You_Do_Not_Need_Medical_Advice</th>
                            <th class="wd-20p border-bottom-0">Notes</th>



                        </tr>
                    </thead>

                    <tbody>

                        <?php $i = 0; ?>
                        @foreach ($Fat_Percentage as $Fat_Percentages)
                            <tr>

                                <td>{{ $i++ }}</td>
                                <td>{{ $Fat_Percentages->The_Ratio }}</td>
                                <td>{{ $Fat_Percentages->ClientNumber->Name }}</td>
                                <td>{{ $Fat_Percentages->Fat_Type }}</td>
                                <td>{{ $Fat_Percentages->You_Need_Medical_Advice }}</td>
                                <td>{{ $Fat_Percentages->You_Do_Not_Need_Medical_Advice }}</td>
                                <td>{{ $Fat_Percentages->Notes }}</td>






                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <br>
                <br>
                <p> <span style="coloer:red">table_Height</span> </p>

                <br>

                <table class="table table-hover" id="example1" data-page-length='50'>
                    <thead>


                        <tr>

                            <th class="wd-15p border-bottom-0">#</th>
                            <th class="wd-15p border-bottom-0">Height_Cm</th>
                            <th class="wd-20p border-bottom-0">Client__Id</th>
                            <th class="wd-20p border-bottom-0"> Natural</th>
                            <th class="wd-20p border-bottom-0"> Abnormal</th>
                            <th class="wd-20p border-bottom-0">Notes</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($Height as $Heights)
                            <tr>

                                <td>{{ $i++ }}</td>
                                <td>{{ $Heights->Height_Cm }}</td>
                                <td>{{ $Heights->ClientId->Name }}</td>
                                <td>{{ $Heights->Natural }}</td>
                                <td>{{ $Heights->Abnormal }}</td>
                                <td>{{ $Heights->Notes }}</td>






                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <br>
                <p><span style="coloer:red">table_Weight</span> </p>
                <br>
                <table class="table table-hover" id="example1" data-page-length='50'>
                    <thead>



                        <tr>

                            <th class="wd-15p border-bottom-0"> #</th>
                            <th class="wd-15p border-bottom-0"> Weight_kg</th>
                            <th class="wd-20p border-bottom-0">id_Client </th>
                            <th class="wd-20p border-bottom-0"> Plus</th>
                            <th class="wd-20p border-bottom-0"> Minus</th>
                            <th class="wd-20p border-bottom-0">Needs-A-Diet</th>
                            <th class="wd-20p border-bottom-0">Needs_Nourishment</th>
                            <th class="wd-20p border-bottom-0"> Notes</th>



                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 0; ?>
                        @foreach ($Weight as $Weights)
                            <tr>

                                <td>{{ $i++ }}</td>
                                <td>{{ $Weights->Weight_kg }}</td>
                                <td>{{ $Weights->id_Client }}</td>
                                <td>{{ $Weights->Plus }}</td>
                                <td>{{ $Weights->Minus }}</td>
                                <td>{{ $Weights->Needs_A_Diet }}</td>
                                <td>{{ $Weights->Needs_Nourishment }}</td>
                                <td>{{ $Weights->Notes }}</td>






                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
