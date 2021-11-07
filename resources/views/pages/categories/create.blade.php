@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Create Category
        </div>
        <div class="card-body">
            <div class="row">
                <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="category">Name of Category</label>
                        <input class="form-control" id="category" type="text" name="name" required>
                        @error('name')
                            <div class="invalid-feedback">Name is required !</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="category">Illustration of Category</label>
                        <input class="form-control" type="file" name="img" aria-label="file example" required>
                        @error('img')
                            <div class="invalid-feedback">Illustration of Category is required !</div>
                        @enderror
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
