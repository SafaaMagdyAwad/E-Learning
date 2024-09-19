@extends('admin.layouts.main')

@section('title')
    Edit Category
@endsection

@section('content')
    <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Edit Category</h2>
        <form action="{{ route('category.update', [$data['id']]) }}" method="post" class="px-md-5"
            enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="form-group mb-3 row">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="" class="form-label col-md-2 fw-bold text-md-end">category:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="title" name="title" class="form-control py-2"
                        value="{{ old('title', $data->title) }}" />
                </div>
            </div>
            <div class="form-group mb-3 row">
                <div class="col-md-2">
                    <img src="{{ asset('assets/images/category/' . $data->image) }}" width="100" height="100">

                </div>
                <div class="col-md-2">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
                    <div class="col-md-10">
                        <input type="file"  name="image" class="form-control py-2" />
                </div>


            </div>

            <div class="text-md-end">
                <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                    Edit Category
                </button>
            </div>
        </form>
    </div>
@endsection
