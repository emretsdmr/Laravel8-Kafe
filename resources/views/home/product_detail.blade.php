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
                        <span>{{$data->title}}</span>
                    </div>
                </div>
            </div>
            <div class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="about_box">
                                @foreach($datalist as $rs)
                                    <form class="main_form" action="{{route('user_shopcart_add',['id'=>$rs->id])}}" method="post">
                                        @csrf
                                        <h3>{{$rs->title}} - {{$rs->weight}}gr</h3><br>
                                        <p>{!! $rs->detail !!}
                                        <h3><br>
                                            {{$rs->price}}₺
                                        </h3></p>
                                        @auth
                                        <label>Quantity :</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" value="1" name="quantity" class="form-control" >
                                            </div>
                                        </div>
                                        <button type="submit">Send</button>
                                        @endauth
                                    </form>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
                            <div class="about_img">
                                <figure><img src="{{Storage::url($rs->image)}}" style="width:400px;height:400px;" alt="#/"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
@endsection
