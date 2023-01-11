@extends('admin.layouts.app')


@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <table>
                            <!-- /.card-header -->
                            <div class="card-body p-0 ">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Main Image</th>
                                        <th>Side Image</th>
                                        <th>Title</th>
                                        <th>description</th>
                                        <th>Footer</th>
                                        <th>Phone</th>
                                        <th>Controls</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($abouts as $about)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset("images/about/$about->main_image") }}" alt=""
                                                     width="75px" height="75px">
                                            </td>
                                            <td>
                                                <img src="{{ asset("images/about/$about->other_image") }}" alt=""
                                                     width="75px" height="75px">
                                            </td>
                                            <td>{{ $about->title }}</td>
                                            <td>{{ $about->description }}</td>
                                            <td>{{ $about->footer }}</td>
                                            <td>{{ $about->phone }}</td>
                                            <td>
                                                <a href="{{ route('about.edit', $about->id) }}"
                                                   class="btn btn-warning m-2">Edit</a>
                                                <form action="{{ route('about.destroy', $about->id) }}" method='POST'
                                                      style="float: left;" class="m-2">
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
                            <!-- /.card-body -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection