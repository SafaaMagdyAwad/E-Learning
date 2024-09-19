@extends('admin.layouts.main')

@section('title')
Add Category
@endsection

@section('content')


<div class="bg-light p-5 rounded">
  <h2 class="fw-bold fs-2 mb-5 pb-2">Add Category</h2>
  <form action="{{route('category.store')}}" method="post" class="px-md-5" enctype="multipart/form-data">

    @csrf

    <div class="form-group mb-3 row">
      @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">Title:</label>
      <div class="col-md-10">
        <input type="text" placeholder="Title" name="title" class="form-control py-2" value="{{old('title')}}" />
      </div>
    </div>
    <div class="form-group mb-3 row">
      @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
      <div class="col-md-10">
        <input type="file" name="image" class="form-control py-2"  />
      </div>
    </div>


    <div class="text-md-end">
      <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
        Add Category
      </button>
    </div>
  </form>
</div>

@endsection
