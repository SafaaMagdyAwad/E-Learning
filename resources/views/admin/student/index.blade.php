@extends('admin.layouts.main')

@section('title')
    All students
@endsection

@section('content')
    <a href="{{ route('student.create') }}" class="btn btn-dark"> Add student</a>

    <div class="bg-light p-5 rounded" style="overflow-x:auto;">
        <h2 class="fw-bold fs-2 mb-5 pb-2">All students</h2>
        <table class="table table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">image</th>
                    <th scope="col">phone</th>
                    <th scope="col">is Active</th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($data as $student)
                    <tr>
                        <td scope="row">{{ $student->id }}</td>
                        <td scope="row">{{ $student->name }}</td>
                        <td><img src="{{ asset('assets/images/student/' . $student->image) }}" width="100" height="100">
                        <td scope="row">{{ $student->phone }}</td>
                        <td scope="row">{{ $student->isActive ? 'Active' : 'Not Active' }} </td>
                        </td>
                        <td><a href="{{ route('student.show', $student['id']) }}" class="btn btn-light">Show</a></td>
                        <td><a href="{{ route('student.edit', $student['id']) }}" class="btn btn-light">Edit</a></td>


                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
@endsection
