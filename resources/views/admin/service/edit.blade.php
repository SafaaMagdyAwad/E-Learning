@extends('admin.layouts.main')

@section('title')
    Edit Category
@endsection

@section('content')
    <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Edit Category</h2>

        <form action="{{ route('service.update', $data) }}" method="post" class="px-md-5" enctype="multipart/form-data">

            @csrf
            @method('put')

            <div class="form-group mb-3 row">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">title:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="title" name="title" class="form-control py-2"
                        value="{{ old('title', $data->title) }}" />
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
                        value="{{ old('description', $data->description) }}" />
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
                <div class="col-md-2">
                    {{ $data->icon }}
                </div>
                <div class="col-md-2">
                    @error('icon')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <label for="" class="form-label col-md-2 fw-bold text-md-end">icon:</label>
                <div class="col-md-10">
                    <input type="text" name="icon" class="form-control py-2" />
                </div>
            </div>


            <div class="text-md-end">
                <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                    Edit service
                </button>
            </div>
        </form>
    </div>
@endsection
