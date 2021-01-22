@extends('layouts.home')

@section('title', 'FAQ')


@section('content')
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i><img src="images/title.png" alt="#"/></i>
                        <h2><br>FAQs</h2><br>
                        @foreach($datalist as $rs)
                            <h3>{{$rs->question}}</h3>
                            {!! $rs->answer !!}
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
@endsection
