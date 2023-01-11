@extends('admin.layouts.app')

@section('action', 'All Books')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Book Details</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $bookTable->name }}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $bookTable->email }}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $bookTable->phone }}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" class="form-control" id="date" name="date" value="{{ $bookTable->date }}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="text" class="form-control" id="time" name="time" value="{{ $bookTable->time }}"
                               disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message"
                                  disabled>{{ $bookTable->message }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="number_of_people ">Number of people</label>
                        <input type="text" class="form-control" id="number_of_people" name="number_of_people" value="{{ $bookTable->number_of_people }}"
                               disabled>
                    </div>
            </div>
        </div>
    </div>
    <a href="{{ route('bookings') }}" class="btn btn-primary">Back</a>
@stop
