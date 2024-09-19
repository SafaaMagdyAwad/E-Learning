@extends('admin.layouts.main')

@section('title')
    All Courses
@endsection

@section('content')
    <a href="{{ route('course.create') }}" class="btn btn-dark"> Add Course</a>

    <div class="bg-light p-5 rounded" style="overflow-x:auto;">
        <h2 class="fw-bold fs-2 mb-5 pb-2">All Cources</h2>
        <table class="table table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">price</th>
                    <th scope="col">star</th>
                    <th scope="col">numberOfStudents</th>
                    <th scope="col">duration</th>
                    <th scope="col">isPopular</th>
                    <th scope="col">isPublished</th>
                    <th scope="col">image</th>
                    <th scope="col">instructor</th>
                    <th scope="col">category</th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($data as $course)
                    <tr>
                        <td scope="row">{{ $course->id }}</td>
                        <td scope="row">{{ $course->title }}</td>
                        <td scope="row">{{ $course->price }}</td>
                        <td scope="row">{{ $course->star }}</td>
                        <td scope="row">{{ $course->numberOfStudents }}</td>
                        <td scope="row">{{ $course->duration }} hr</td>
                        <td scope="row">{{ $course->isPopular ? 'Popular' : 'Not Popular' }} </td>
                        <td scope="row">{{ $course->isPublished ? 'Published' : 'Not Published' }} </td>
                        <td><img src="{{ asset('assets/images/course/' . $course->image) }}" width="100" height="100">
                        </td>
                        <td scope="row">{{ $course->instructor->name }} </td>
                        <td scope="row">{{ $course->category->title }} </td>
                        <td><a href="{{ route('course.show', $course) }}" class="btn btn-light">Show</a></td>
                        <td><a href="{{ route('course.edit', $course) }}" class="btn btn-light">Edit</a></td>
                        <td>
                            <form id="" action="{{ route('course.destroy', $course) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-light"
                                    onclick="return confirm('Are you sure You want to delete')"> Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
