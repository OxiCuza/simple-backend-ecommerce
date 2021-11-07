@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Create Category
        </div>
        <div class="card-body">
            <div class="row">
                <form action="{{route('category.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label class="form-label" for="category">Name of Category</label>
                        <input class="form-control" id="category" type="text" name="name" required value="{{$data->name}}">
                        @error('name')
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="category">Illustration of Category</label>
                        <p class="text-medium-emphasis small">If you want to change the illustration of the category, you must choose the file!</p>
                        <input class="form-control" type="file" name="img" aria-label="file example" value="">
                        @error('img')
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                        @enderror
                    </div>
                    <div class="col-4 mb-5">
                        <label class="form-label" for="img-category">Preview current illustration of Category</label>
                        <div class="card" style="--cui-card-cap-bg: #3b5998">
                            <div class="card-header position-relative d-flex justify-content-center align-items-center">
                                <img src="{{$data->img_url}}" alt="" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('css')

@endpush

@push('js')

@endpush
