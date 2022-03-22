@extends('layouts.master')
@section('css')


@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Profile personly</h4>
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
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                <p style="font-size: 19px;font-weight: 800;"><i class="ti-user"
                        style="font-size: 30px;    margin-right: 12px;">Name:</i> {{ Auth::user()->name }}<br><br><br>
                </p>

                <p style="font-size: 19px;font-weight: 800;"><i class="ti-id-badge"
                        style="font-size: 30px;    margin-right: 12px;">Email:</i>
                    {{ Auth::user()->email }}<br><br><br>
                </p>
                <p style="font-size: 19px;font-weight: 800;"><i class="ti-more-alt"
                        style="font-size: 30px;    margin-right: 12px;">Categorie:</i>
                    {{ Auth::user()->Categorie->name }}
                    <br><br><br>
                </p>

                <p style="font-size: 19px;font-weight: 800;"><i class="ti-more-alt"
                        style="font-size: 30px;    margin-right: 12px;">Specialization:</i>
                    {{ Auth::user()->Specialization->Name }}
                    <br><br><br>
                </p>


            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
