<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Advanced Form Elements | Bootstrap Based Admin Template - Material Design</title>

    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets')}}/admin//favicon.ico" type="image/x-icon">

    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

</head>

<body class="theme-red">

<section class="content">

    <!-- Advanced Select -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Order Details
                    </h2>
                    @include('home.message')
                </div>
                <div class="body">
                    <form role="form" action="{{route('admin_order_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered">

                            <tr>
                                <th>User Name</th><td>{{$data->user->name}}</td>
                            </tr>
                            <tr>
                                <th>Table No</th><td>{{$data->tableno}}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>{{$data->total}}₺</td>
                            </tr>
                            <tr>
                                <th>Status</th><td>
                                    <select name="status">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>Accepted</option>
                                        <option>Rejected</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>User Note</th>
                                <td>
                                    {{$data->note}}
                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Edit Order</button>
                    </form>
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
                            <form role="form" action="{{route('admin_order_product_update',['id'=>$rs->id])}}" method="post">
                                @csrf
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
                                    <select name="status">
                                        <option selected="selected">{{$rs->status}}</option>
                                        <option>Accepted</option>
                                        <option>Rejected</option>
                                    </select>
                                </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- #END# Advanced Select -->

</section>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

<!-- Bootstrap Core Css -->
<link href="{{asset('assets')}}/admin//plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Waves Effect Css -->
<link href="{{asset('assets')}}/admin//plugins/node-waves/waves.css" rel="stylesheet" />

<!-- Animation Css -->
<link href="{{asset('assets')}}/admin//plugins/animate-css/animate.css" rel="stylesheet" />

<!-- Colorpicker Css -->
<link href="{{asset('assets')}}/admin//plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

<!-- Dropzone Css -->
<link href="{{asset('assets')}}/admin//plugins/dropzone/dropzone.css" rel="stylesheet">

<!-- Multi Select Css -->
<link href="{{asset('assets')}}/admin//plugins/multi-select/css/multi-select.css" rel="stylesheet">

<!-- Bootstrap Spinner Css -->
<link href="{{asset('assets')}}/admin//plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

<!-- Bootstrap Tagsinput Css -->
<link href="{{asset('assets')}}/admin//plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

<!-- Bootstrap Select Css -->
<link href="{{asset('assets')}}/admin//plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<!-- noUISlider Css -->
<link href="{{asset('assets')}}/admin//plugins/nouislider/nouislider.min.css" rel="stylesheet" />

<!-- Custom Css -->
<link href="{{asset('assets')}}/admin//css/style.css" rel="stylesheet">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{asset('assets')}}/admin//css/themes/all-themes.css" rel="stylesheet" />
