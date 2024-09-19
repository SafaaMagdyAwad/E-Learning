@extends('admin.layouts.main')

@section('title')
    Add instructor
@endsection

@section('content')
    <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Add instructor</h2>
        <form action="{{ route('instructor.store') }}" method="post" class="px-md-5" enctype="multipart/form-data">

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
                @error('specilisation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">specilisation:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="specilisation" name="specilisation" class="form-control py-2"
                        value="{{ old('specilisation') }}" />
                </div>
            </div>
            <hr>


            <label for="" class="form-label col-md-2 fw-bold text-md-end">isPublished:</label>
            <div class="col-md-10">
                <input type="hidden" name="isPublished" class="form-control py-2" value=0 />
                <input type="checkbox" name="isPublished" class=" py-2" value=1 @checked(old('isPublished') == 1) />
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
            Add instructor
        </button>
    </div>
    </form>
    </div>
@endsection
