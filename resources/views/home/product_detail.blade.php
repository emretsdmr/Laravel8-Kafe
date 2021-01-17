@extends('layouts.home')

@section('title', $data->title)
@section('description'){{$data->description}}@endsection
@section('keywords', $data->keywords)


@section('content')
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i><img src="{{asset('assets')}}/images/title.png" alt="#"/></i>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="about">
                <div class="container">
                    <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="about_box">
                                    <h3>{{$data->title}} - {{$data->weight}}gr</h3><br>
                                    <p>{!! $data->detail !!}
                                    <h3><br>
                                        {{$data->price}}₺
                                        </h3></p>
                                    <a href="{{route('addtocart',['id'=>$data->id])}}">Add to Cart <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
                                <div class="about_img">
                                    <figure><img src="{{Storage::url($data->image)}}" style="width:400px;height:400px;" alt="#/"></figure>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
@endsection
