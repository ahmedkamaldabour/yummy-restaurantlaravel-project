@extends('admin.layouts.app')
@section('action', 'User Dashboard')

@section('content')
    <div class="row w-100">
        <div class="col-12 ">
            @if (Auth::check())

                @include("profile.edit" , ['user' => Auth::user()])

            @else
                @include('auth.login')
            @endif
        </div>
    </div>
@endsection