@extends('admin.layouts.main')

@section('title')
    Add student
@endsection

@section('content')
    <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Add student</h2>
        <form action="{{ route('student.store') }}" method="post" class="px-md-5" enctype="multipart/form-data">

            @csrf
            <input type="hidden" name="isActive" class="form-control py-2" value=1 />

            <div class="form-group mb-3 row">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">name:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="name" name="name" class="form-control py-2"
                        value="{{ old('name') }}" />
                </div>
            </div>

            <hr>
            <div class="form-group mb-3 row">
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">phone:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="phone" name="phone" class="form-control py-2"
                        value="{{ old('phone') }}" />
                </div>
            </div>

    <hr>
    <div class="form-group mb-3 row">
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
        <div class="col-md-10">
            <input type="file" name="image" class="form-control py-2" />
        </div>
    </div>
    <div class="text-md-end">
        <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Add student
        </button>
    </div>
    </form>
    </div>
@endsection
