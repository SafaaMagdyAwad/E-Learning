@extends('admin.layouts.main')

@section('title')
Show Contact Message
@endsection

@section('content')

<div class="bg-light p-5 rounded">
  <div class="card bg-light border-0">
    <div class="row justify-content-center">

      <div class="col-lg-8 col-md-6 col-12 card-body">
        <div class="mb-4 text-center py-2">
          <h2 class="fw-bold bg-light card-header">
            {{$data->name}}   ::{{$data->email}}</h2>
        </div>
        <div class="mb-4 text-center py-2">

            <hr>
            <h3>
                {{$data->subject}}
            </h3>
            <hr>
            <p>
              {{$data->message}}
            </p>

        </div>


        <div class="text-md-end">
          <a href="{{route('contact.index')}}" class="btn mt-4 btn-primary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Back To All Contact Messages
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
