@extends('layouts.home')

@section('title', $setting->title)
@section('description')
    {{$setting->description}}
@endsection

@section('keywords',$setting->description)
@include('home._slider')
@section('content')



    <div class="bg_bg">
        <!-- about -->
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <i><img src="{{ asset('assets')}}/images/title.png" alt="#"/></i>
                            <h2>Günün Ürünü</h2>

                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($picked as $rs)
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="about_box">
                            <h3><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}} - {{$rs->price}}₺</a></h3>
                            <p>{!! $rs->detail !!}</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
                        <div class="about_img">
                            <figure><img src="{{Storage::url($rs->image)}}" style="width:400px;height:400px;" alt="#/"></figure>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- end about -->

        <br><br><br>

        <!-- Our Client -->
        <div class="Client">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <i><img src="{{ asset('assets')}}/images/title.png" alt="#"/></i>
                            <h2>Laravel8-Kafe Uygulaması</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="Client_box">
                            <img src="{{ asset('assets')}}/images/client.jpg" alt="#"/>
                            <h3>Emre Taşdemir</h3>
                            <p>Bu site Yüksel Çelik'in hazırladığı videolar eşliğinde yapılmıştır.</p>
                            <i><img src="{{ asset('assets')}}/images/client_icon.png" alt="#"/></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Our Client -->
@endsection




