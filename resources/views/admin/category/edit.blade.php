@extends('admin.layouts.app')
@section('action', 'Edit Category')
@section('content')

    <div class="container">
        @include('message')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class='card-body'>
                            <form action="{{route('category.update',[$category->id])}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group" id="category">
                                    <label for="category">Category Name</label>
                                    <input type="text" name="name" class="form-control" id="category"
                                           value="{{$category->name}}" placeholder="Enter Category Name here">
                                </div>
                                <button type="submit" class="btn btn-primary">EDIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection