@extends('admin.layouts.app')
@section('action', 'Create New Products')

@section('content')
    <div class="container">
        @include('message')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class='card-body'>
                            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group" id="name">
                                    <label for="name">Meal Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                           value="{{old('name')}}" placeholder="Enter Meal Name here">
                                </div>
                                <div class="form-group" id="price">
                                    <label for="price">Meal price</label>
                                    <input type="text" name="price" class="form-control" id="price"
                                           value="{{old('price')}}" placeholder="Enter Meal price here">
                                </div>
                                {{--                                input for ingredients--}}
                                <div class="form-group" id="description">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" class="form-control" id="description"
                                           value="{{old('description')}}" placeholder="Enter Meal ingredients here">
                                </div>
                                {{--                                input for image--}}
                                <div class="form-group" id="image">
                                    <label for="image">Meal Image</label>
                                    <input type="file" name="image" class="form-control" id="image"
                                           value="{{old('image')}}" placeholder="Enter Meal image here">
                                </div>
                                {{--                                input for category-id--}}
                                <div class="form-group" id="category_id">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" class="form-control" id="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
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