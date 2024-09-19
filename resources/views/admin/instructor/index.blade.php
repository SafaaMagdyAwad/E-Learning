@extends('admin.layouts.main')

@section('title')
    All instructors
@endsection

@section('content')
    <a href="{{ route('instructor.create') }}" class="btn btn-dark"> Add instructor</a>

    <div class="bg-light p-5 rounded" style="overflow-x:auto;">
        <h2 class="fw-bold fs-2 mb-5 pb-2">All Instructors</h2>
        <table class="table table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">image</th>
                    <th scope="col">specilisation</th>
                    <th scope="col">is Published</th>
                    <th scope="col">is Active</th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($data as $instructor)
                    <tr>
                        <td scope="row">{{ $instructor->id }}</td>
                        <td scope="row">{{ $instructor->name }}</td>
                        <td><img src="{{ asset('assets/images/team/' . $instructor->image) }}" width="100" height="100">
                        <td scope="row">{{ $instructor->specilisation }}</td>
                        <td scope="row">{{ $instructor->isPublished ? 'Published' : 'Not Published' }} </td>
                        <td scope="row">{{ $instructor->isActive ? 'Active' : 'Not Active' }} </td>
                        </td>
                        <td><a href="{{ route('instructor.show', $instructor['id']) }}" class="btn btn-light">Show</a></td>
                        <td><a href="{{ route('instructor.edit', $instructor['id']) }}" class="btn btn-light">Edit</a></td>


                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
