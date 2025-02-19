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
                        <i><img src="images/title.png" alt="#"/></i>

                        <span>when looking at its layout. The point of using Lorem</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                    <div class="blog_box">
                        <div class="blog_img_box">
                            <figure><img src="images/blog_img1.png" alt="#"/>
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
                            <figure><img src="images/blog_img2.png" alt="#"/>
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
                            <figure><img src="images/blog_img3.png" alt="#"/>
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
@endsection
