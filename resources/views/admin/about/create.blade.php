@extends('admin.layouts.app')


@section('content')
    <div class="content w-100 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add New About</h3>
                        </div>
                        @include('message')
                        <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputEmail3">Main Image</label>
                                    <input type="file" name="main_image" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Side Image</label>
                                    <input type="file" name="other_image" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="card-body">
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                       id="inputEmail3" placeholder="Enter About Title">
                            </div>
                            <div class="card-body">
                                <textarea name="description" id="description" cols="30" rows="10"
                                          placeholder="Enter Description"
                                          class="form-control">{{ old('description')}}</textarea>
                            </div>
                            <div class="card-body">
                                <textarea name="footer" id="footer" cols="30" rows="10" placeholder="Enter Footer"
                                          class="form-control">{{ old('footer') }}</textarea>
                            </div>
                            <div class="card-body">
                                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}"
                                       placeholder="Enter About Phone" id="inputEmail3">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Add New About</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection