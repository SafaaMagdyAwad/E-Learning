@extends('admin.layouts.main')

@section('title')
    Edit User
@endsection

@section('content')
    <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Edit User</h2>

        <form action="{{ route('user.update', $data) }}" method="post" class="px-md-5" enctype="multipart/form-data">

            @csrf
            @method('put')

            <div class="form-group mb-3 row">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">name:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="name" name="name" class="form-control py-2"
                        value="{{ old('name',$data->name) }}" />
                </div>
            </div>

            <hr>
            <div class="form-group mb-3 row">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">email:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="email" name="email" class="form-control py-2"
                        value="{{ old('email',$data->email) }}" />
                </div>
            </div>
            <hr>
            <div class="form-group mb-3 row">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">password:</label>
                <div class="col-md-10">
                    <input type="password" placeholder="password" name="password" class="form-control py-2"
                         />
                </div>
            </div>
            
           

    <div class="text-md-end">
        <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Edit user
        </button>
    </div>
    </form>
    </div>
@endsection
