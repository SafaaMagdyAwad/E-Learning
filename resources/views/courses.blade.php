@extends('layouts.main')
@section('content')
    @push('name')
        Courses
    @endpush
    @push('LinkName')
        Courses
    @endpush
    @include('includes.header')
    @include('includes.categories'){{-- done --}}
    @include('includes.courses')
    @include('includes.testimonial')
@endsection
