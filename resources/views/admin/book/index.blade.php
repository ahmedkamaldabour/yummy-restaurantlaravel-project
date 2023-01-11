@extends('admin.layouts.app')

@section('action', 'All Books')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $book->name }}</td>
                <td>{{ $book->email }}</td>
                <td>{{ $book->phone }}</td>
                <td>
                    <a href="{{ route('bookings.show', $book->id) }}" class="btn btn-primary">show</a>
                    <form action="{{ route('bookings.destroy', $book->id) }}" method="post"
                          style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--    pagnation links--}}
    {{ $books->links() }}
@stop