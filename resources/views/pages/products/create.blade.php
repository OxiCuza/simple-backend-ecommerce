@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Create Product
        </div>
        <div class="card-body">
            <div class="row">
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="category">Category</label>
                        <select class="form-select" name="category_id" aria-label="Default select example" id="category" required>
                            <option selected disabled>Open this select category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">Category is required</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name-product">Name of Product</label>
                        <input class="form-control" id="name-product" name="title" type="text" required>
                        @error('name')
                            <div class="invalid-feedback">Name is required</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="img-product">Ilustration of Product</label>
                        <input class="form-control" id="img-product" name="img" type="file" aria-label="file example" required>
                        @error('img')
                            <div class="invalid-feedback">Ilustration of Product is required !</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="desc-product">Description of Product</label>
                        <textarea class="form-control" name="description" id="desc-product" rows="3" required></textarea>
                        @error('description')
                            <div class="invalid-feedback">Description product is required !</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="sku-product">SKU CODE</label>
                        <input class="form-control" id="sku-product" type="text" name="sku_code" required>
                        @error('sku_code')
                            <div class="invalid-feedback">SKU CODE is required</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="sku-product">Price</label>
                        <input class="form-control" id="sku-product" name="price" type="number" required>
                        @error('price')
                            <div class="invalid-feedback">Price is required</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" id="discount" type="radio" name="is_discount" value="1">
                            <label class="form-check-label" for="discount">Product is discount</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="not-discount" type="radio" name="is_discount" value="0" checked>
                            <label class="form-check-label" for="not-discount">Product not discount</label>
                        </div>
                    </div>
                    <div class="mb-5 d-none" id="wrapper-discount">
                        <label class="form-label" for="sku-product">Price after discount</label>
                        <input class="form-control" id="sku-product" name="after_discount" type="number">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
            let target = $('#wrapper-discount');
           $('input[type=radio]').on('change', function () {
               if (this.value == 1) {
                   target.toggleClass('d-none');
               } else {
                   target.toggleClass('d-none');
               }
           })
        });
    </script>

@endpush
