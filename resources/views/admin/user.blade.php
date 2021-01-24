@extends('layouts.admin')

@section('title', 'Users List')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Image Gallery -->
            <div class="block-header">
                <h2>
                    Users
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12">

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
                                            User List
                                        </h2>

                                    </div>
                                    <div class="body table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>E-Mail</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($datalist as $rs)
                                                <tr>
                                                    <th scope="row">{{$rs->id}}</th>
                                                    <td>@if($rs->profile_photo_path)
                                                            <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius:10px" alt="">
                                                        @endif</td>
                                                    <td>{{$rs->name}}</td>
                                                    <td>{{$rs->email}}</td>
                                                    <td>{{$rs->phone}}</td>
                                                    <td>{{$rs->address}}</td>
                                                    <td>@foreach($rs->roles as $row)
                                                            {{$row->name}},
                                                        @endforeach
                                                        <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><i class="material-icons">control_point</i></a>
                                                    </td>
                                                    <td><a href="{{route('admin_user_edit',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><i class="material-icons">edit</i></td>
                                                    <td><a href="{{route('admin_user_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><i class="material-icons">delete</i></a></td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                @include('home.message')


                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



