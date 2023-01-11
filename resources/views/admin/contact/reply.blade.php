@extends('admin.layouts.app')
@section('action', " Email to ( $contact->name )")

@section('content')

    <div class="container">
        <div class="row">
            @include('message')
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-8">
                                <form method="POST" action="{{route('mail')}}">
                                    @csrf

                                    <fieldset disabled>
                                        <div class="mb-12">
                                            <label for="disabledTextInput" class="form-label">From: </label>
                                            <input type="text" id="disabledTextInput" name="email"
                                                   value="{{$contact->email}}"
                                                   class="form-control">
                                        </div>
                                        <div class="mb-12">
                                            <label for="disabledTextInput" class="form-label">Subject</label>
                                            <input type="text" id="disabledTextInput" name=""
                                                   value="{{$contact->subject}}"
                                                   class="form-control">
                                        </div>
                                        <div class="mb-12">
                                            <label for="disabledTextInput" class="form-label">Message</label>
                                            <textarea class="form-control" name="" id="exampleFormControlTextarea1"
                                                      rows="3">{{$contact->message}}</textarea>
                                        </div>
                                    </fieldset>
                                    <input type="hidden" id="disabledTextInput" name="email"
                                           value="{{$contact->email}}"
                                           class="form-control">

                                    <div class="mb-12">
                                        <label for="disabledTextInput" class="form-label">Reply</label>
                                        <textarea class="form-control" name="reply" id="exampleFormControlTextarea1"
                                                  rows="3"></textarea>
                                    </div>
                                    <div class="mb-12 mt-2">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection