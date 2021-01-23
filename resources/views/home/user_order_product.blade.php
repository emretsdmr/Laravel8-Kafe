@extends('layouts.home')

@section('title', 'Order Products')



@section('content')
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i><img src="{{asset('assets')}}/images/title.png" alt="#"/></i>

                        <span>Order Products</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mar_bottom">
                    <div class="body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Note</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>
                                        @if($rs->product->image)
                                            <img src="{{Storage::url($rs->product->image)}}" style="height:50px;width:50px;" alt="">
                                        @endif
                                    </td>
                                    <td>{{$rs->product->title}}</td>
                                    <td>{{$rs->price}}₺</td>
                                    <td>
                                        {{$rs->quantity}}
                                    </td>
                                    <td>
                                        {!! $rs->note !!}
                                    </td>
                                    <td>
                                        {{$rs->status}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        Total: {{$rs->order->total}}₺
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
@endsection
