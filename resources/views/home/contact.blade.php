@extends('layouts.home')

@section('title', 'Contact - '. $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords', $setting->keywords)

@section('content')
    <div class="yellow_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>References</h2>

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
                        <h3>References</h3>
                        <p>{!! $setting->contact !!}</p>
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
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Bize<strong class="white"> Ulaşın</strong></h2>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                        <form class="main_form" method="post" action="{{route('sendmessage')}}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Name & Surname" type="text" name="name">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Phone Number" type="text" name="phone">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Subject" type="text" name="subject">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="message"></textarea>
                                    @include('home.message')
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="send">Send</button>
                                </div>
                            </div>
                            <br>
                            <br><br>
                            <br>
                        </form>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="img-box">
                            <figure><img src="images/img.jpg" alt="img" /></figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- end footer -->
@endsection
