@extends('layouts.master')
@section('css')

@section('title')
    Weight

@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Weight
                table</h4>
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
<!-- row -->
<div class="row">


    <div class="col-lg-12 col-md-12">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>خطا</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card" style="background: #000">
            <div class="card-body">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ url('Elderly.index') }}">back</a>
                    </div>
                </div><br>
                <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                    action="{{ route('Weight_Elderly.store', 'test') }}" method="post">
                    {{ csrf_field() }}

                    <div class="row mg-b-20" style="margin-left:-14px;">
                        <div class="parsley-input col-md-6" id="fnWrapper" style="    margin-left: -13px;">
                            <label> Weight_kg: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="Weight_kg" required="" type="text">
                        </div>
                        <br>
                        <div class="parsley-input col-md-6" id="fnWrapper" id="lnWrapper">
                            <label> Plus : <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="Plus" required="" type="text">
                        </div>
                    </div>

                    <b>
                        <b><br>
                            <b><br>
                                <div class="row mg-b-20" style="width: 94%;">
                                    <div class="parsley-input col-md-6" id="fnWrapper">
                                        <label> Minus: <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="Minus" required=""
                                            type="text">
                                    </div>



                                    <div class="parsley-input col-md-6" id="fnWrapper" id="lnWrapper">
                                        <label> Needs_A_Diet: <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="Needs_A_Diet" required=""
                                            type="text">
                                    </div>
                                </div>
                                <br>


                                <div class="row mg-b-20" style="width: 94%;">


                                    <div class="parsley-input col-md-6" id="fnWrapper" id="lnWrapper">
                                        <label> Notes: <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="Notes" required=""
                                            type="text">
                                    </div>

                                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">



                                        <label for="inputState">Choose from the list:</label>
                                        <select class="custom-select mr-sm-2" name="id_Client" required>
                                            <option selected disabled>Choose from the list</option>
                                            @foreach ($Client as $Cliente)
                                                <option value="{{ $Cliente->id }}">{{ $Cliente->Name }}
                                                </option>
                                            @endforeach
                                        </select>



                                    </div>






                                </div>


                                <b><br>
                                    <div class="row mg-b-20" style="width: 94%;">
                                        <div class="parsley-input col-md-6" id="fnWrapper">
                                            <label> Needs_Nourishment: <span class="tx-danger">*</span></label>
                                            <input class="form-control form-control-sm mg-b-20"
                                                data-parsley-class-handler="#lnWrapper" name="Needs_Nourishment"
                                                required="" type="text">
                                        </div>

                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="Categore_id" required=""
                                            type="hidden" value="3">
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="    right: 81px;">

                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
