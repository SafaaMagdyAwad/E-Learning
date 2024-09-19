@extends('admin.layouts.main')

@section('title')
Add course
@endsection

@section('content')


<div class="bg-light p-5 rounded">
  <h2 class="fw-bold fs-2 mb-5 pb-2">Add course</h2>
  <form action="{{route('course.store')}}" method="post" class="px-md-5" enctype="multipart/form-data">

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
    <hr>
    <div class="form-group mb-3 row">
      @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">price:</label>
      <div class="col-md-10">
        <input type="number" step="0.1" placeholder="price" name="price" class="form-control py-2" value="{{old('price')}}" />
      </div>
    </div>
    <hr>
    <div class="form-group mb-3 row">
      @error('duration')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">duration:</label>
      <div class="col-md-10">
        <input type="number" step="0.1" placeholder="duration" name="duration" class="form-control py-2" value="{{old('duration')}}" />
      </div>
    </div>
    <hr>
    <div class="form-group mb-3 row">

      <label for="" class="form-label col-md-2 fw-bold text-md-end">isPopular:</label>
      <div class="col-md-10">
        <input type="hidden"  name="isPopular" class=" py-2" value=0  />
        <input type="checkbox"  name="isPopular" class="py-2" value=1 @checked(old('isPopular')==1) />
      </div>
    </div>
    <hr>
    <div class="form-group mb-3 row">

      <label for="" class="form-label col-md-2 fw-bold text-md-end">isPublished:</label>
      <div class="col-md-10">
        <input type="hidden"  name="isPublished" class="form-control py-2" value=0  />
        <input type="checkbox"  name="isPublished" class=" py-2" value=1 @checked(old('isPublished')==1) />
      </div>
    </div>
    <hr>
    <div class="form-group mb-3 row">
      @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
      <div class="col-md-10">
        <input type="file" name="image" class="form-control py-2"  />
      </div>
    </div>
    <hr>
    <div class="form-group mb-3 row">
      @error('instructor_id')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">instructor:</label>
      <div class="col-md-10">
        <select name="instructor_id" class="form-control py-2">
            @foreach ($relationData['instructor'] as $instructor)

            <option value="{{ $instructor->id }}"  >{{ $instructor->name }}</option>
            @endforeach
        </select>
      </div>
    </div>
    <hr>
    <div class="form-group mb-3 row">
      @error('category_id')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="" class="form-label col-md-2 fw-bold text-md-end">category:</label>
      <div class="col-md-10">
        <select name="category_id" class="form-control py-2">
            @foreach ($relationData['category'] as $category)

            <option value="{{ $category->id }}"  >{{ $category->title }}</option>
            @endforeach
        </select>
      </div>
    </div>


    <div class="text-md-end">
      <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
        Add course
      </button>
    </div>
  </form>
</div>

@endsection
