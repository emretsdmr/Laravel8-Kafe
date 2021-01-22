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

                        <span>My Shopcart</span>
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
                                <th>Total</th>
                                <th>Quantity</th>
                                <th>Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $total=0;
                            @endphp
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>
                                        @if($rs->product->image)
                                            <img src="{{Storage::url($rs->product->image)}}" style="height:50px;width:50px;" alt="">
                                        @endif
                                    </td>
                                    <td>{{$rs->product->title}}</td>
                                    <td>{{$rs->product->price}}₺</td>
                                    <td>{{$rs->product->price * $rs->quantity}}</td>
                                    <td>
                                        <form form class="main_form" action="{{route('user_shopcart_update',['id'=>$rs->id])}}" method="post">
                                            @csrf
                                            <div class="form-line">
                                                <input type="number" value="{{$rs->quantity}}" name="quantity" onchange="this.form.submit()">
                                            </div>
                                        </form>
                                    </td>
                                    <td><a href="{{route('user_shopcart_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><i class="material-icons">delete</i></a></td>
                                </tr>
                                @php
                                    $total += $rs->product->price * $rs->quantity;
                                @endphp
                            @endforeach
                            </tbody>
                        </table>
                        Total: {{$total}}₺
                        <br>
                        <a href="#">Give Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
@endsection
