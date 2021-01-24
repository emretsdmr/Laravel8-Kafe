@extends('layouts.admin')

@section('title', 'Admin Order List')



<section class="content">
    <div class="container-fluid">
        <!-- Image Gallery -->
        <div class="block-header">
            <h2>
                Orders
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Order List
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mar_bottom">
                                    <div class="body table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>User Name</th>
                                                <th>Table No</th>
                                                <th>Note</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Show</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($datalist as $rs)
                                                <tr>
                                                    <td>{{$rs->user->name}}</td>
                                                    <td>{{$rs->tableno}}</td>
                                                    <td>{!! $rs->note !!}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td>{{$rs->total}}₺</td>
                                                    <td><a href="{{route('admin_order_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=800')">Show</a></td>
                                                    <td><a href="{{route('admin_order_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><i class="material-icons">delete</i></a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




