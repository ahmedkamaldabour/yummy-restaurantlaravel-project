@extends('admin.layouts.app')
@section('action', 'ALL categories')
@section('content')
    <div class="container">
        @include('message')
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
                <th scope="col">Number of products</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        {{--                      show how many prodct for this category--}}
                        {{ $category->products->count() }}
                    </td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('category.destroy', $category->id) }}" method="post"
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
    </div>
    {{ $categories->links() }}
@endsection