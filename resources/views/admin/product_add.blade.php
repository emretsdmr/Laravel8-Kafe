@extends('layouts.admin')

@section('title', 'Add Product')

@section('javascript')
    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection

@section('content')
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Advanced Form Elements | Bootstrap Based Admin Template - Material Design</title>

    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets')}}/admin//favicon.ico" type="image/x-icon">


</head>

<body class="theme-red">

<section class="content">

    <!-- Advanced Select -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ADD PRODUCT
                    </h2>
                </div>
                <div class="body">
                    <form role="form" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label>Category</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control select2" name="category_id" style="width: 100%;">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <label>Title</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="title" class="form-control" >
                            </div>
                        </div>
                        <label>Keywords</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="keywords" class="form-control" >
                            </div>
                        </div>
                        <label>Description</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="description" class="form-control" >
                            </div>
                        </div>
                        <label>Slug</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="slug" class="form-control" >
                            </div>
                        </div>
                        <label>Detail</label>
                        <div class="form-group">

                            <textarea id="summernote" name="detail"></textarea>
                            <script>
                                CKEDITOR.replace( 'detail' );
                            </script>

                        </div>
                        <label>Price</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" value="0" name="price" class="form-control" >
                            </div>
                        </div>
                        <label>Weight</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="weight" class="form-control" >
                            </div>
                        </div>
                        <label>Tax</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" value="18" name="tax" class="form-control" >
                            </div>
                        </div>
                        <label>Image</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="file" name="image" class="form-control" >
                            </div>
                        </div>
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <label>Status</label>
                            <select class="form-control select2" name="status" style="width: 100%;">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Add Product</button>
                    </form>
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
@endsection
