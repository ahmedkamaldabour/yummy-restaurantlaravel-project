@extends('admin.layouts.app')
@section('action', 'Contact')

@section('content')
    <div class="container">
        <div class="row">
            @include('message')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class='card-body'>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Send Email</th>
                                    <th scope="col">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$message->name}}</td>
                                        <td>{{$message->email}}</td>
                                        <td>{{$message->message}}</td>
                                        {{--                                        button to send email to this id --}}
                                        <td>
                                                <a href="{{route('contact.reply', $message->id)}}"
                                                   class="btn btn-primary">Send Email</a>
                                        </td>

                                        <td>
                                            {{--                                            <a href="{{route('user_message.show',$message->id)}}"--}}
                                            {{--                                               class="btn btn-primary">Show</a>--}}
                                            {{--                                            <a href="{{route('user_message.edit',$message->id)}}"--}}
                                            {{--                                               class="btn btn-success">Edit</a>--}}
                                            <form action="{{route('contact.destroy',$message->id)}}"
                                                  method="POST"
                                                  style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection