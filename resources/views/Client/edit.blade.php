@extends('layouts.master')
@section('css')
    <!-- Internal Nice-select css  -->
    <link href="{{ URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" />
@section('title')
    Edit_Client
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Client</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">
                Edit_Client</span>
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
                        <a class="btn btn-primary btn-sm" href="{{ route('Client.index') }}">رجوع</a>
                    </div>
                </div><br>

                <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                    action="{{ route('update', 'test') }}" method="post">
                    {{ csrf_field('') }}

                    @csrf
                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                            <input class="form-control form-control-sm mg-b-20" name="id" value="{{ $Client->id }}"
                                type="hidden">
                            <label> Name: <span class="tx-danger">*</span></label>

                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="Name" value="{{ $Client->Name }}" type="text">
                        </div>
                        <br>
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> Email: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="National_ID" value="{{ $Client->National_ID }}" type="text">
                        </div>
                    </div>

                    <b>
                        <b><br>
                            <b><br>
                                <div class="row mg-b-20">
                                    <div class="parsley-input col-md-6" id="fnWrapper">
                                        <label> Password: <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="Status"
                                            value="{{ $Client->Status }}" type="text">
                                    </div>
                                    <br>
                                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                        <label> Confirm-Password: <span class="tx-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="categorie_id" required>
                                            <option value=" {{ $Client->categorie_id }}">
                                                {{ $Client->Categorie->name }}
                                            </option>
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
</div>
</div>
</div>




</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')

<!-- Internal Nice-select js-->
<script src="{{ URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js') }}"></script>

<!--Internal  Parsley.min js -->
<script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
<!-- Internal Form-validation js -->
<script src="{{ URL::asset('assets/js/form-validation.js') }}"></script>
@endsection
