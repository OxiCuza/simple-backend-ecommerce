@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Details Product
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card overflow-hidden">
                        <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-info text-white py-4 px-5 me-3">
                                <img src="{{$product->img_url}}" alt="" width="150px">
                            </div>
                            <div>
                                <div class="text-medium-emphasis text-uppercase fw-semibold small mb-2">{{$product->title}}</div>
                                <p>
                                    {{$product->description}}
                                </p>
                                @if($product->is_discount)
                                    <label for="">Price</label>
                                    <div class="fs-6 text-sm text-danger mb-2">{{currency_IDR($product->price)}}</div>
                                    <label for="">Price After Discount</label>
                                    <div class="fs-6 fw-semibold text-primary">{{currency_IDR($product->after_discount)}}</div>
                                @else
                                    <label for="">Price</label>
                                    <div class="fs-6 fw-semibold text-primary">{{currency_IDR($product->price)}}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')

@endpush

@push('js')

@endpush
