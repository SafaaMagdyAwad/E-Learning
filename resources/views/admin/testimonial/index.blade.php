@extends('admin.layouts.main')

@section('title')
    All testimonials
@endsection

@section('content')
    <a href="{{ route('testimonial.create') }}" class="btn btn-dark"> Add testimonial</a>

    <div class="bg-light p-5 rounded" style="overflow-x:auto;">
        <h2 class="fw-bold fs-2 mb-5 pb-2">All testimonials</h2>
        <table class="table table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">image</th>
                    <th scope="col">subject</th>
                    <th scope="col">message</th>
                    <th scope="col">is Published</th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($data as $testimonial)
                    <tr>
                        <td scope="row">  {{ $testimonial->id }}</td>
                        <td scope="row">{{ $testimonial->name }}</td>
                        <td scope="row"><img src="{{ asset('assets/images/testimonial/'.$testimonial->image) }}" width="50 px"  height="50 px"></td>
                        <td scope="row">{{ $testimonial->subject }}</td>
                        <td scope="row">{{ Str::limit($testimonial->message, 50 , '...') }}</td>
                        <td scope="row">{{ $testimonial->isPublished ? 'Published' : 'Not Published' }} </td>
                        </td>
                        <td><a href="{{ route('testimonial.show',$testimonial) }}" class="btn btn-light">Show</a></td>
                        <td><a href="{{ route('testimonial.edit',$testimonial) }}" class="btn btn-light">Edit</a></td>
                        <td>
                            <form id="" action="{{ route('testimonial.destroy', $testimonial) }}" method="POST">
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
