@extends('admin.layouts.main')

@section('title')
    All Services
@endsection

@section('content')
    <a href="{{ route('service.create') }}" class="btn btn-dark"> Add service</a>

    <div class="bg-light p-5 rounded" style="overflow-x:auto;">
        <h2 class="fw-bold fs-2 mb-5 pb-2">All Services</h2>
        <table class="table table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">is Published</th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($data as $service)
                    <tr>
                        <td scope="row">  <i class="{{ $service->icon }}"></i> </td>
                        <td scope="row">{{ $service->title }}</td>
                        <td scope="row">{{ Str::limit($service->description, 50 , '...') }}</td>
                        <td scope="row">{{ $service->isPublished ? 'Published' : 'Not Published' }} </td>
                        </td>
                        <td><a href="{{ route('service.show',$service) }}" class="btn btn-light">Show</a></td>
                        <td><a href="{{ route('service.edit',$service) }}" class="btn btn-light">Edit</a></td>
                        <td>
                            <form id="" action="{{ route('service.destroy', $service) }}" method="POST">
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
        {{ $data->links() }}
    </div>
@endsection
