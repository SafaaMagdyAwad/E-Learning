@extends('admin.layouts.main')

@section('title')
    Add service
@endsection

@section('content')
    <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Add service</h2>
        <form action="{{ route('service.store') }}" method="post" class="px-md-5" enctype="multipart/form-data">

            @csrf

            <div class="form-group mb-3 row">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">title:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="title" name="title" class="form-control py-2"
                        value="{{ old('title') }}" />
                </div>
            </div>

            <hr>
            <div class="form-group mb-3 row">
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">description:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="description" name="description" class="form-control py-2"
                        value="{{ old('description') }}" />
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
        @error('icon')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="" class="form-label col-md-2 fw-bold text-md-end">icon class:</label>
        <div class="col-md-10">
            <input type="text" name="icon" class="form-control py-2" />
        </div>
    </div>
    <div class="text-md-end">
        <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Add service
        </button>
    </div>
    </form>
    </div>
@endsection
