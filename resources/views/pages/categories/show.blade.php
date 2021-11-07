@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Details Category
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card overflow-hidden">
                        <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-info text-white py-4 px-5 me-3">
                                <img src="{{$data->img_url}}" alt="" width="150px">
                            </div>
                            <div>
                                <div class="text-medium-emphasis text-uppercase fw-semibold small">{{$data->name}}</div>
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
