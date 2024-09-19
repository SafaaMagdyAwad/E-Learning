@extends('layouts.main')
@section('content')
    @push('name')
        About Us
    @endpush
    @push('LinkName')
        about
    @endpush
    @include('includes.header')
    @include('includes.service')
    @include('includes.about')
    @include('includes.team')
@endsection







