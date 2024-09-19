@extends('admin.layouts.main')

@section('title')
    All contacts
@endsection

@section('content')

    <div class="bg-light p-5 rounded" style="overflow-x:auto;">
        <h2 class="fw-bold fs-2 mb-5 pb-2">All contacts</h2>
        <table class="table table-hover">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">subject</th>
                    <th scope="col">message</th>
                    <th scope="col">Show</th>
                    <th scope="col">Delete</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($data as $contact)
                    <tr>
                        <td scope="row">{{ $contact->id }}</td>
                        <td scope="row">{{ $contact->name }}</td>
                        <td scope="row">{{ $contact->email }}</td>
                        <td scope="row">{{ $contact->subject }}</td>
                        <td scope="row">{{ Str::limit($contact->message, 50, '...') }}</td>

                        <td><a href="{{ route('contact.show', $contact) }}" class="btn btn-light">Show</a></td>
                        <td>
                            <form id="" action="{{ route('contact.destroy', $contact) }}" method="POST">
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
