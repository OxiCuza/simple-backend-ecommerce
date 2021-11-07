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
            List Categories
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-12">
                    <a href="{{route('category.create')}}" class="btn btn-primary">
                        <i class="icon icon-2xl cil-plus"></i>
                        New Category
                    </a>
                </div>
            </div>
            <div class="row">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th style="width: 7%;">#</th>
                            <th>Name</th>
                            <th>Image Preview</th>
                            <th style="width: 30%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $key => $category)
                            <tr>
                                <td>
                                    {{$key+1}}
                                </td>
                                <td>
                                    {{$category->name}}
                                </td>
                                <td>
                                    @if($category->img)
                                        <img src="{{$category->img_url}}" alt="" style="width: 100px;">
                                    @else
                                        <img src="{{asset('images/dummy.jpg')}}" alt="">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('category.show', $category->id)}}" class="btn btn-info text-white">
                                        <i class="icon icon-2xl cil-info"></i>
                                        Details
                                    </a>
                                    <a href="{{route('category.edit', $category->id)}}" class="btn btn-warning text-white">
                                        <i class="icon icon-2xl cil-pencil"></i>
                                        Edit
                                    </a>
                                    <form action="{{route('category.destroy', $category->id)}}" method="POST" onsubmit="return confirm('Delete this category permanently?')" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger text-white" type="submit">
                                            <i class="icon icon-2xl cil-trash"></i>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endpush

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        });
    </script>
@endpush
