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
                            <h2>Günün Yemeği</h2>
                            <span>It is a long established fact that a reader will be distracted by the readable content of a
                   <br> page when looking at its layout. The point of using Lorem
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($picked as $rs)
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="about_box">
                            <h3><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}} - {{$rs->price}}₺</a></h3>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscureContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard </p>
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

        <!-- blog -->
        <div class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <i><img src="{{ asset('assets')}}/images/title.png" alt="#"/></i>
                            <h2>Our Blog</h2>
                            <span>when looking at its layout. The point of using Lorem</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                        <div class="blog_box">
                            <div class="blog_img_box">
                                <figure><img src="{{ asset('assets')}}/images/blog_img1.png" alt="#"/>
                                    <span>02 FEB 2019</span>
                                </figure>
                            </div>
                            <h3>Spicy Barger</h3>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                        <div class="blog_box">
                            <div class="blog_img_box">
                                <figure><img src="{{ asset('assets')}}/images/blog_img2.png" alt="#"/>
                                    <span>02 FEB 2019</span>
                                </figure>
                            </div>
                            <h3>Egg & Tosh</h3>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="blog_box">
                            <div class="blog_img_box">
                                <figure><img src="{{ asset('assets')}}/images/blog_img3.png" alt="#"/>
                                    <span>02 FEB 2019</span>
                                </figure>
                            </div>
                            <h3>Pizza</h3>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end blog -->

        <!-- Our Client -->
        <div class="Client">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <i><img src="{{ asset('assets')}}/images/title.png" alt="#"/></i>
                            <h2>Our Client</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="Client_box">
                            <img src="{{ asset('assets')}}/images/client.jpg" alt="#"/>
                            <h3>Roock Due</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.</p>
                            <i><img src="{{ asset('assets')}}/images/client_icon.png" alt="#"/></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Our Client -->
@endsection




