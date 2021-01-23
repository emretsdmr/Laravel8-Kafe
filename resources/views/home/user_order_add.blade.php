@extends('layouts.home')

@section('title', 'Order List')


@section('content')
    <!-- blog -->
    <div class="blog">
        <div class="container">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="blog_box">
                        <div class="blog_img_box">
                            <figure><img src="images/blog_img2.png" alt="#"/>
                                <span>Order</span>
                            </figure>
                        </div>
                        <br>
                        <table class="table table-bordered">
                            <form class="main_form" method="post" action="{{route('user_order_store')}}">
                                @csrf
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <h4>Table No:</h4><input class="form-control" placeholder="Table No" type="number" min="0" name="tableno">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <h4>Note:</h4>
                                    <textarea class="textarea" placeholder="Note" type="text" name="note"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input type="hidden" name="total" value="{{$total}}">
                                    <h4>Total : {{$total}}₺</h4>
                                </div>
                                <br><br>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="send">Send</button>
                                </div>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
@endsection
