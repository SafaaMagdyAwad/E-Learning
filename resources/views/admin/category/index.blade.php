@extends('admin.layouts.main')

@section('title')
All Categories
@endsection

@section('content')

<a href="{{ route('category.create') }}" class="btn btn-dark"> Add Category</a>

<div class="bg-light p-5 rounded" style="overflow-x:auto;">
<h2 class="fw-bold fs-2 mb-5 pb-2">All Categories</h2>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Show</th>
      <th scope="col">Delete</th>


    </tr>
  </thead>
  <tbody>
    @foreach($data as $category)
    <tr>
      <td scope="row">{{$category['id']}}</td>
      <td>{{$category['title']}}</td>
      <td><img src="{{ asset('assets/images/category/'.$category->image) }}" width="100" height="100"></td>
      <td><a href="{{route('category.edit',$category['id'])}}" class="btn btn-light">Edit</a></td>
      <td>
      <form id="" action="{{ route('category.destroy', $category) }}" method="POST" >
       @csrf
      @method('DELETE')
        <button type="submit" class="btn btn-light"  onclick="return confirm('Are you sure You want to delete')"> Delete</button>
      </form>
      </td>

    </tr>
    @endforeach
</tbody>
</table>
{{ $data->links() }}
</div>


@endsection
