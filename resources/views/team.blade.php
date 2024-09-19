@extends('layouts.main')
@section('content')
    @push('name')
        Our Team
    @endpush
    @push('LinkName')
        team
    @endpush
    @include('includes.header')
    @include('includes.team')
@endsection
