@extends('admin.layouts.main')

@section('title')
Show Course
@endsection

@section('content')

<div class="bg-light p-5 rounded">
  <div class="card bg-light border-0">
    <div class="row justify-content-center">

      <div class="col-lg-8 col-md-6 col-12 card-body">
        <img src="{{ asset('assets/images/course/'.$data->image) }}">
        <div class="mb-4 text-center py-2">
          <h2 class="fw-bold bg-light card-header">
            Course  ::{{$data->title}}</h2>
        </div>
        <div class="mb-4 text-center py-2">
          <h4 class="fw-bold bg-light card-header">
            price  ::{{$data->price}}</h4>
            <hr>
            <p>
                star  ::{{$data->star}}
            </p>
            <hr>
            <p>
                number Of Students  ::{{$data->numberOfStudents}}
            </p>
            <hr>
            <p>
                duration  ::{{$data->duration}}
            </p>
            <hr>
            <p>
                is Popular  ::{{$data->isPopular?"Popular":"Not Popular"}}
            </p>
            <hr>
            <p>
                is Published  ::{{$data->isPublished?"Published":"Not Published"}}
            </p>
            <hr>

            <p>
                instructor  ::{{$data->instructor->name}}
            </p>
            <hr>
            <p>
                category  ::{{$data->category->title}}
            </p>
        </div>


        <div class="text-md-end">
          <a href="{{route('course.index')}}" class="btn mt-4 btn-primary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Back To All Courses
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
