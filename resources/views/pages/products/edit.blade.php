@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Create Product
        </div>
        <div class="card-body">
            <div class="row">
                <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="category">Category</label>
                        <select class="form-select" name="category_id" aria-label="Default select example" id="category" required>
                            <option selected disabled>Open this select category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">Category is required</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name-product">Name of Product</label>
                        <input class="form-control" id="name-product" name="title" type="text" required value="{{$product->title}}">
                        @error('name')
                        <div class="invalid-feedback">Name is required</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="img-product">Ilustration of Product</label>
                        <p class="text-medium-emphasis small">If you want to change the illustration of the product, you must choose the file!</p>
                        <input class="form-control" id="img-product" name="img" type="file" aria-label="file example">
                        @error('img')
                            <div class="invalid-feedback">Ilustration of Product is required !</div>
                        @enderror
                    </div>
                    <div class="col-4 mb-5">
                        <label class="form-label" for="img-category">Preview current illustration of Product</label>
                        <div class="card" style="--cui-card-cap-bg: #3b5998">
                            <div class="card-header position-relative d-flex justify-content-center align-items-center">
                                <img src="{{$product->img_url}}" alt="" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="desc-product">Description of Product</label>
                        <textarea class="form-control" name="description" id="desc-product" rows="3" required>{{$product->description}}</textarea>
                        @error('description')
                            <div class="invalid-feedback">Description product is required !</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="sku-product">SKU CODE</label>
                        <input class="form-control" id="sku-product" type="text" name="sku_code" required value="{{$product->sku_code}}">
                        @error('sku_code')
                            <div class="invalid-feedback">SKU CODE is required</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="sku-product">Price</label>
                        <input class="form-control" id="sku-product" name="price" type="number" required value="{{$product->price}}">
                        @error('price')
                            <div class="invalid-feedback">Price is required</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" id="discount" type="radio" name="is_discount" value="1" @if($product->is_discount == 1) checked @endif>
                            <label class="form-check-label" for="discount">Product is discount</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="not-discount" type="radio" name="is_discount" value="0" @if($product->is_discount == 0) checked @endif>
                            <label class="form-check-label" for="not-discount">Product not discount</label>
                        </div>
                    </div>
                    <div class="mb-5 d-none" id="wrapper-discount">
                        <label class="form-label" for="after-discount">Price after discount</label>
                        <input class="form-control" id="after-discount" name="after_discount" type="number" value="{{$product->after_discount}}">
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
            let input = $('#after-discount');
            let isDiscount = `{{$product->is_discount}}`;

            $('input[type=radio]').on('change', function () {
                if (this.value == 1) {
                    target.removeClass('d-none');
                    $(input).attr('disabled', false);
                } else {
                    target.addClass('d-none');
                    $(input).attr('disabled', true);
                }
            });

            if (isDiscount == 1) {
                target.removeClass('d-none');
            }
        });
    </script>

@endpush
