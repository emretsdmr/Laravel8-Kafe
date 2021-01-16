@extends('layouts.home')

@section('title','User Profile')

@section('content')

    <!-- about -->
    <div class="about">
        <div class="container">
            @include('profile.show')
        </div>
    </div>
    <!-- end about -->
@endsection
