@extends('admin.layouts.main')

@section('title')
    Edit Category
@endsection

@section('content')
    <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Edit Category</h2>

        <form action="{{ route('instructor.update', $data) }}" method="post" class="px-md-5" enctype="multipart/form-data">

            @csrf
            @method('put')

            <div class="form-group mb-3 row">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">name:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="name" name="name" class="form-control py-2"
                        value="{{ old('name', $data->name) }}" />
                </div>
            </div>

            <hr>
            <div class="form-group mb-3 row">
                @error('specilisation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">specilisation:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="specilisation" name="specilisation" class="form-control py-2"
                        value="{{ old('specilisation', $data->specilisation) }}" />
                </div>
            </div>
            <hr>
            <div class="form-group mb-3 row">

                <label for="" class="form-label col-md-2 fw-bold text-md-end">is Published:</label>
                <div class="col-md-10">
                    <input type="hidden" name="isPublished" class="form-control py-2" value=0 />
                    <input type="checkbox" name="isPublished" class=" py-2" value=1 @checked(old('isPublished', $data->isPublished) == 1) />
                </div>
            </div>
            <hr>
            <div class="form-group mb-3 row">

                <label for="" class="form-label col-md-2 fw-bold text-md-end">is Active:</label>
                <div class="col-md-10">
                    <input type="hidden" name="isActive" class="form-control py-2" value=0 />
                    <input type="checkbox" name="isActive" class=" py-2" value=1 @checked(old('isActive', $data->isActive) == 1) />
                </div>
            </div>
            <hr>
            <div class="form-group mb-3 row">
                <div class="col-md-2">
                    <img src="{{ asset('assets/images/team/' . $data->image) }}" width="50px" height="100px">

                </div>
                <div class="col-md-2">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
                <div class="col-md-10">
                    <input type="file" name="image" class="form-control py-2" />
                </div>
            </div>


            <div class="text-md-end">
                <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                    Edit instructor
                </button>
            </div>
        </form>
    </div>
@endsection
