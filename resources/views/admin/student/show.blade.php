@extends('admin.layouts.main')

@section('title')
    Show student
@endsection

@section('content')
    <div class="bg-light p-5 rounded">
        <div class="card bg-light border-0">
            <div class="row justify-content-center">

                <div class="col-lg-8 col-md-6 col-12 card-body">
                    <img src="{{ asset('assets/images/student/' . $data->image) }}">
                    <div class="mb-4 text-center py-2">
                        <h2 class="fw-bold bg-light card-header">
                            Name ::{{ $data->name }}</h2>
                    </div>
                    <div class="mb-4 text-center py-2">
                        <h4 class="fw-bold bg-light card-header">
                            phone ::{{ $data->phone }}</h4>

                        
                        <hr>

                        </p>
                        Cources ::
                        <div class="row">

                            @foreach ($data->courses as $course)
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <p>{{ $course->title }}</p>
                                    <p>{{ $course->isPopular ? 'Popular' : 'Not Popular' }}</p>
                                    <img src="{{ asset('assets/images/course/' . $course->image) }}" width="100px"
                                        height="100px">
                                </div>
                            @endforeach
                        </div>
                        </p>

                    </div>


                    <div class="text-md-end">
                        <a href="{{ route('student.index') }}"
                            class="btn mt-4 btn-primary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                            Back To All students
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
