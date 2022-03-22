@extends('layouts.master')
@section('css')

@section('title')
    Add_Client
@stop
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

        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}">back</a>
                    </div>
                </div><br>
                <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                    action="{{ route('Client.store') }}" method="post">
                    {{ csrf_field() }}


                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                            <label> Name: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="Name" required="" type="text">
                        </div>
                        <br>
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> National_ID: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="National_ID" required="" type="text">
                        </div>
                    </div>

                    <b>
                        <b><br>

                            <b><br>
                                <div class="row mg-b-20">
                                    <div class="parsley-input col-md-6" id="fnWrapper">
                                        <label> Status: <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="Status" required=""
                                            type="Status">
                                    </div>
                                    <br>

                                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                        <label> categorie_id: <span class="tx-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="categorie_id" required>
                                            <option selected disabled>Choose from the list</option>
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <b><br>
                                    <b><br>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

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
