<!-- start slider section -->
<div class="slider_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="slider_cont">
                                            <h3>emretsdmr<br>steakHouse</h3>
                                            <p>Delicious!</p>
                                            <p>Best Quality</p>
                                            <p>Yes, Please!</p>
                                            <p>Slide for products.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="slider_image full text_align_center">
                                            <img class="img-responsive" src="{{asset('assets')}}/images/sliderphoto.png" alt="#" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach($slider as $rs)
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="slider_cont">
                                            <h3>{{$rs->title}}</h3>
                                            <p>{{$rs->price}}₺</p>
                                            <a class="main_bt_border" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">Order Now</a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 full text_align_center">
                                        <div class="slider_image">
                                            <img class="img-responsive" src="{{Storage::url($rs->image)}}" alt="#" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                            <i class="fa fa-angle-up"></i>
                        </a>
                        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                            <i class="fa fa-angle-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end slider section -->
