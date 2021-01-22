@extends('layouts.admin')

@section('title', 'FAQ List')


@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Image Gallery -->
        <div class="block-header">
            <h2>
                FAQs
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <a href="{{route('admin_faq_add')}}" type="button" class="btn bg-pink waves-effect">Add FAQ</a>
                        @include('home.message')
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
                                            <th>Position</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datalist as $rs)
                                        <tr>
                                            <th scope="row">{{$rs->id}}</th>
                                            <td>{{$rs->position}}</td>
                                            <td>{{$rs->question}}</td>
                                            <td>{!! $rs->answer !!}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin_faq_edit',['id'=>$rs->id])}}" ><i class="material-icons">edit</i></td>
                                            <td><a href="{{route('admin_faq_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><i class="material-icons">delete</i></a></td>
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



