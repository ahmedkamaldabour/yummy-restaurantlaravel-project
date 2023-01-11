@extends('admin.layouts.app')
@section('action', 'Create New Category')
@section('content')
    <div class="container">
        @include('message')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class='card-body'>
                            <form action="{{route('category.store')}}" method="POST">
                                @csrf
                                <div class="form-group" id="category">
                                    <label for="category">Category Name</label>
                                    <input type="text" name="name" class="form-control" id="category"
                                           value="{{old('name')}}" placeholder="Enter Category Name here">
                                </div>
                                <button type="submit" class="btn btn-primary">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection