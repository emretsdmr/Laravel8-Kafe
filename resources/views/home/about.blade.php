@extends('layouts.home')

@section('title', 'About Us - '. $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords', $setting->keywords)

@section('content')
    <div class="yellow_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>About Us</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i><img src="images/title.png" alt="#"/></i>

                        <span><br>{{$setting->title}}
                </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about_box">
                        <h3>About Us</h3>
                        <p>{!! $setting->aboutus !!}</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
                    <div class="about_img">
                        <figure><img src="images/about-img.jpg" alt="#/"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->


@endsection
