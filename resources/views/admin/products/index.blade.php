@extends('admin.layouts.app')
@section('action', 'All Products')

@section('content')
    <div class="container">
        @include('message')
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">In Category</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($meals as $meal)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $meal->name }}</td>
                    <td>{{$meal->category->name}}</td>
                    <td>{{ $meal->price }}</td>
                    <td>{{ $meal->description }}</td>
                    <td><img src="{{ asset('images/products/'.$meal->image) }}" alt="" width="100px"></td>
                    <td>
                        <a href="{{ route('product.edit', $meal->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('product.destroy', $meal->id) }}" method="post"
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

@endsection