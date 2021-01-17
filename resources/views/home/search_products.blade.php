@extends('layouts.home')

@section('title', $search ." Products List")

@section('content')
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i><img src="{{asset('assets')}}/images/title.png" alt="#"/></i>
                        <br><br>
                        <span>{{$search}} Product List</span>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($datalist as $rs)
                    <div class="col-md-4 mar_bottom">
                        <div class="blog_box">
                            <div class="blog_img_box">
                                <figure><img src="{{Storage::url($rs->image)}}" style="width:300px;height:300px;" alt="#"/>
                                    <span>{{$rs->price}}₺</span>
                                </figure>
                            </div>
                            <h3><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}}</a></h3>
                            <p>{!! $rs->detail !!}</p>
                        </div>
                        <br>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end blog -->
@endsection
