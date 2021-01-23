@extends('layouts.home')

@section('title', 'My Shopcart')



@section('content')
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i><img src="{{asset('assets')}}/images/title.png" alt="#"/></i>

                        <span>My Orders</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mar_bottom">
                    <div class="body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Table No</th>
                                <th>Note</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->tableno}}</td>
                                    <td>{!! $rs->note !!}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->total}}₺</td>
                                    <td><a href="{{route('user_order_show',['id'=>$rs->id])}}">Show</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
@endsection
