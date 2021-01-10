@extends('layouts.admin')

@section('title', 'Category List')


@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Image Gallery -->
        <div class="block-header">
            <h2>
                Categories
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <a href="{{route('admin_category_add')}}" type="button" class="btn bg-pink waves-effect">Add Category</a>
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
                                            <th>Parent</th>
                                            <th>Title(s)</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <th scope="row">{{$rs->id}}</th>
                                            <td>{{App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin_category_edit',['id'=>$rs->id])}}"><i class="material-icons">edit</i></td>
                                            <td><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><i class="material-icons">delete</i></a></td>
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



