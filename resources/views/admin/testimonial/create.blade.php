@extends('admin.layouts.main')

@section('title')
    Add testimonial
@endsection

@section('content')
    <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Add testimonial</h2>
        <form action="{{ route('testimonial.store') }}" method="post" class="px-md-5" enctype="multipart/form-data">

            @csrf

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
                @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">subject:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="subject" name="subject" class="form-control py-2"
                        value="{{ old('subject') }}" />
                </div>
            </div>
            <hr>
            <div class="form-group mb-3 row">
                @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">message:</label>
                <div class="col-md-10">
                    <textarea name="message" class="form-control py-2">{{ old('message') }}</textarea>

                </div>
            </div>
            <hr>


            <label for="" class="form-label col-md-2 fw-bold text-md-end">is Published:</label>
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
        <label for="" class="form-label col-md-2 fw-bold text-md-end">image :</label>
        <div class="col-md-10">
            <input type="file" name="image" class="form-control py-2" />
        </div>
    </div>
    <div class="text-md-end">
        <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Add testimonial
        </button>
    </div>
    </form>
    </div>
@endsection
