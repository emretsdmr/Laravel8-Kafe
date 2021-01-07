@extends('layouts.admin')

@section('title', 'Product List')


@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Image Gallery -->
        <div class="block-header">
            <h2>
                Products
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <a href="{{route('admin_product_add')}}" type="button" class="btn bg-pink waves-effect">Add Product</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>

                            <div class="card">
                                <div class="header">
                                    <h2>
                                        List
                                    </h2>

                                </div>
                                <div class="body table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Title</th>
                                            <th>Keywords</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Category_id</th>
                                            <th>Detail</th>
                                            <th>Price</th>
                                            <th>Weight</th>
                                            <th>Tax</th>
                                            <th>User_id</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <th scope="row">{{$rs->id}}</th>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->keywords}}</td>
                                            <td>{{$rs->description}}</td>
                                            <td>{{$rs->image}}</td>
                                            <td>{{$rs->category_id}}</td>
                                            <td>{{$rs->detail}}</td>
                                            <td>{{$rs->prica}}</td>
                                            <td>{{$rs->weight}}</td>
                                            <td>{{$rs->tax}}</td>
                                            <td>{{$rs->user_id}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin_product_edit',['id'=>$rs->id])}}"><i class="material-icons">edit</i></td>
                                            <td><a href="{{route('admin_product_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><i class="material-icons">delete</i></a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



