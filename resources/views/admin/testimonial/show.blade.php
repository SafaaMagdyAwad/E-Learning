@extends('admin.layouts.main')

@section('title')
    Show testimonial
@endsection

@section('content')
    <div class="bg-light p-5 rounded">
        <div class="card bg-light border-0">
            <div class="row justify-content-center">

                <div class="col-lg-8 col-md-6 col-12 card-body">
                    <img src="{{ asset('assets/images/testimonial/'.$data->image) }}" width="100 px" height="100 px">
                    <div class="mb-4 text-center py-2">
                        <h2 class="fw-bold bg-light card-header">
                            Name ::{{ $data->name }}</h2>
                    </div>
                    <div class="mb-4 text-center py-2">
                        <h3>{{ $data->subject }}</h3>
                        <h4 class="fw-bold bg-light card-header">
                            message ::{{ $data->message }}</h4>

                        <hr>
                        <p>
                            is Published ::{{ $data->isPublished ? 'Published' : 'Not Published' }}
                        </p>


                    </div>


                    <div class="text-md-end">
                        <a href="{{ route('testimonial.index') }}"
                            class="btn mt-4 btn-primary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                            Back To All testimonials
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
