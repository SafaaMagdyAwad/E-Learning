@extends('admin.layouts.main')

@section('title')
    All users
@endsection

@section('content')
    <a href="{{ route('user.create') }}" class="btn btn-dark"> Add user</a>

    <div class="bg-light p-5 rounded" style="overflow-x:auto;">
        <h2 class="fw-bold fs-2 mb-5 pb-2">All users</h2>
        <table class="table table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                    <tr>
                        <td scope="row">  {{ $user->id }}</td>
                        <td scope="row">{{ $user->name }}</td>
                        <td scope="row">{{ $user->email }}</td>
                       
                        <td><a href="{{ route('user.edit',$user) }}" class="btn btn-light">Edit</a></td>
                        <td>
                            <form id="" action="{{ route('user.destroy', $user) }}" method="POST">
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
