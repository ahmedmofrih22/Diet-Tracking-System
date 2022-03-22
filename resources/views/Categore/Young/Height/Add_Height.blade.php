@extends('layouts.master')
@section('css')

@section('title')
    Add_Height

@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Height
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
                        <a class="btn btn-primary btn-sm" href="{{ url('Young.index') }}">back</a>
                    </div>
                </div><br>
                <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                    action="{{ route('Height_Young.store', 'test') }}" method="post">
                    {{ csrf_field() }}

                    <div class="row mg-b-20" style="margin-left:-14px;">
                        <div class="parsley-input col-md-6" id="fnWrapper" style="    margin-left: -13px;">
                            <label> Height_Cm: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="Height_Cm" required="" type="text">
                        </div>
                        <br>
                        <div class="parsley-input col-md-6" id="fnWrapper" id="lnWrapper">
                            <label> Natural : <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="Natural" required="" type="text">
                        </div>
                    </div>

                    <b>
                        <b><br>
                            <b><br>
                                <div class="row mg-b-20" style="width: 94%;">
                                    <div class="parsley-input col-md-6" id="fnWrapper">
                                        <label> Abnormal: <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="Abnormal" required=""
                                            type="text">
                                    </div>



                                    <div class="parsley-input col-md-6" id="fnWrapper" id="lnWrapper">
                                        <label> Notes: <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="Notes" required=""
                                            type="text">
                                    </div>
                                </div>
                                <br>


                                <div class="row mg-b-20" style="width: 94%;">




                                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">



                                        <label for="inputState">Choose from the list:</label>
                                        <select class="custom-select mr-sm-2" name="Client__Id" required>
                                            <option selected disabled>Choose from the list</option>
                                            @foreach ($Client as $Cliente)
                                                <option value="{{ $Cliente->id }}">{{ $Cliente->Name }}
                                                </option>
                                            @endforeach
                                        </select>



                                    </div>

                                    <input class="form-control form-control-sm mg-b-20"
                                        data-parsley-class-handler="#lnWrapper" name="Categore_id" required=""
                                        type="hidden" value="2">





                                </div>


                                <b><br>
                                    <b><br>
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
