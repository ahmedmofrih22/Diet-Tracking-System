@extends('layouts.master')
@section('css')
    <!-- Internal Nice-select css  -->
    <link href="{{ URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" />
@section('title')
    Edit_Abdominal_CircumferenceController
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Abdominal_Circumference</h4><span
                class="text-muted mt-1 tx-13 mr-2 mb-0">
                Abdominal_Circumference</span>
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
                        <a class="btn btn-primary btn-sm" href="{{ url('Young.index') }}">رجوع</a>
                    </div>
                </div><br>

                <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                    action="{{ route('update_YoungAbdominal', 'test') }}" method="post">
                    {{ csrf_field('GET') }}

                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                            <input class="form-control form-control-sm mg-b-20" name="id" value="{{ $Abdominl->id }}"
                                type="hidden">
                            <label>cean_Poison: <span class="tx-danger">*</span></label>

                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="Ocean_Poison" value="{{ $Abdominl->Ocean_Poison }}" type="text">
                        </div>
                        <br>
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> Email: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="Cause_Harm" value="{{ $Abdominl->Cause_Harm }}" type="text">
                        </div>
                    </div>

                    <b>
                        <b><br>
                            <b><br>
                                <div class="row mg-b-20">
                                    <div class="parsley-input col-md-6" id="fnWrapper">
                                        <label> Password: <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="Does_No_Harm"
                                            value="{{ $Abdominl->Does_No_Harm }}" type="text">
                                    </div>
                                    <br>
                                    <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                        <label>Notes: <span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="Notes"
                                            value="{{ $Abdominl->Notes }}" type="text">
                                    </div>
                                </div>
                                <b><br>
                                    <div class="row mg-b-20">
                                        <div class="parsley-input col-md-6" id="fnWrapper">
                                            <label> Specialization_id: <span class="tx-danger">*</span></label>
                                            <select class="custom-select my-1 mr-sm-2" name="Client_id">
                                                <option value="{{ $Abdominl->Client_id }}">
                                                    {{ $Abdominl->Client->Name }}</option>
                                                @foreach ($Client as $Cliente)
                                                    <option value="{{ $Cliente->id }}">
                                                        {{ $Cliente->Name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input class="form-control form-control-sm mg-b-20"
                                            data-parsley-class-handler="#lnWrapper" name="Categore_id" required=""
                                            type="hidden" value="2">
                                        <br>

                                    </div>
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
