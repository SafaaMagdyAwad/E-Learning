<!DOCTYPE html>
<html lang="en">
    @extends('layouts.main')
    @section('content')
        @push('name')
        Contact Us
        @endpush
        @push('LinkName')
        contact
        @endpush
        @include('includes.header')
        @include('includes.contact')

    @endsection
