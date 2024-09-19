@extends('admin.layouts.main')

@section('title')
    Show service
@endsection

@section('content')
    <div class="bg-light p-5 rounded">
        <div class="card bg-light border-0">
            <div class="row justify-content-center">

                <div class="col-lg-8 col-md-6 col-12 card-body">
                    <i class="{{ $data->icon }}"></i>
                    <div class="mb-4 text-center py-2">
                        <h2 class="fw-bold bg-light card-header">
                            Name ::{{ $data->title }}</h2>
                    </div>
                    <div class="mb-4 text-center py-2">
                        <h4 class="fw-bold bg-light card-header">
                            description ::{{ $data->description }}</h4>

                        <hr>
                        <p>
                            is Published ::{{ $data->isPublished ? 'Published' : 'Not Published' }}
                        </p>


                    </div>


                    <div class="text-md-end">
                        <a href="{{ route('service.index') }}"
                            class="btn mt-4 btn-primary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                            Back To All services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
