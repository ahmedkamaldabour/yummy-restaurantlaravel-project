@extends('admin.layouts.app')
@section('action', 'Add New Gallery Images')
@section('content')

    <div class="content w-100 ">
        <div class="container">
            <div class="row">
                <div class="col-12 w-100">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add New Gallery</h3>
                        </div>
                        @include('message')
                        <form action="{{ route('gallery.update',[$gallery->id])}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Change Image</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div>
                        <img width="500px" height="300px"
                             src="{{ asset("images/gallery/$gallery->image") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection