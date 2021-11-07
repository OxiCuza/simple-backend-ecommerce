@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Create Category
        </div>
        <div class="card-body">
            <div class="row">
                <form action="{{route('profile.update', $profile->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="name" name="name" type="text" required value="{{$profile->name}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="inputEmail3">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="inputEmail3" type="email" disabled readonly value="{{$profile->email}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="avatar">Avatar</label>
                        <div class="col-sm-10">
                            <p class="text-medium-emphasis small">If you want to change the avatar, you must choose the file!</p>
                            <input class="form-control" id="avatar" name="avatar" type="file" aria-label="file example">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="avatar-preview">Preview avatar</label>
                        <div class="col-sm-10">
                            @if($profile->avatar == null)
                                <img src="{{asset('images/18.jpg')}}" alt="" style="width: 200px; height: 200px; object-fit: cover;" class="rounded-circle">
                            @else
                                <img src="{{asset('storage/'.$profile->avatar)}}" alt="" style="width: 200px; height: 200px; object-fit: cover;" class="rounded-circle w-40 h-40">
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="telp">Telp</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="telp" name="no_telp" type="number" required value="{{$profile->no_telp}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary text-white" type="submit">Update</button>
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
