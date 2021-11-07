@extends('layouts.app')
@section('content')

    @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert">{{$message}}</div>
    @endisset

    @if($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">{{$message}}</div>
    @endif

    <div class="card mb-4">
        <div class="card-header">
            Dashboard
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-info">
                        <div class="card-body">
                            <div class="text-medium-emphasis-inverse text-end mb-4">
                                <svg class="icon icon-xxl">
                                    <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-chart-pie')}}"></use>
                                </svg>
                            </div>
                            <div class="fs-4 fw-semibold">
	                            {{number_format($categories, 0, '.', ',')}}
                            </div>
                            <small class="text-medium-emphasis-inverse text-uppercase fw-semibold">
                                Categories
                            </small>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-md-2">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <div class="text-medium-emphasis-inverse text-end mb-4">
                                <svg class="icon icon-xxl">
                                    <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-basket')}}"></use>
                                </svg>
                            </div>
                            <div class="fs-4 fw-semibold">
                                {{number_format($products, 0, '.', ',')}}
                            </div>
                            <small class="text-medium-emphasis-inverse text-uppercase fw-semibold">
                                Products
                            </small>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
        </div>
    </div>
@endsection
