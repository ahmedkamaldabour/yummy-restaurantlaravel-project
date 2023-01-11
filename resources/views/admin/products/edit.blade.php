@extends('admin.layouts.app')
@section('action', 'Edit Product')


@section('content')

    <div class="container">
        @include('message')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class='card-body'>
                            <form action="{{route('product.update', [$product->id])}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group" id="name">
                                    <label for="name">Meal Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                           value="{{$product->name}}" placeholder="Enter Meal Name here">
                                </div>
                                <div class="form-group" id="price">
                                    <label for="price">Meal price</label>
                                    <input type="text" name="price" class="form-control" id="price"
                                           value="{{ $product->price }}" placeholder="Enter Meal price here">
                                </div>
                                {{--                                input for ingredients--}}
                                <div class="form-group" id="description">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" class="form-control" id="description"
                                           value="{{$product->description}}" placeholder="Enter Meal ingredients here">
                                </div>
                                {{--                                get the img --}}
                                <div class="form-group"
                                     id="image">
                                    <label for="image">Meal Image</label>
                                    <input type="file" name="image" class="form-control" id="image"
                                           placeholder="Enter Meal image here">
                                    <img src="{{asset('images/products/'.$product->image)}}" alt="" width="100px"
                                         height="100px">
                                </div>
                                <div class="form-group"
                                     id="category_id">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" class="form-control" id="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                    @if($category->id == $product->category_id) selected @endif>{{$category->name}}</option>
                                        @endforeach
                                    </select>
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