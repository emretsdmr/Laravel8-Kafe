@extends('layouts.admin')

@section('title', 'Edit Setting')

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
                        EDIT Setting
                    </h2>
                </div>
                <div class="body">
                    <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control" >
                        <label>Title</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="title" value="{{$data->title}}" class="form-control" >
                            </div>
                        </div>
                        <label>Keywords</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                            </div>
                        </div>
                        <label>Description</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                            </div>
                        </div>
                        <label>Company</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="company" value="{{$data->company}}" class="form-control" >
                            </div>
                        </div>
                        <label>Adress</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="adress" value="{{$data->adress}}"  class="form-control" >
                            </div>
                        </div>
                        <label>Phone</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="phone" value="{{$data->phone}}"  class="form-control" >
                            </div>
                        </div>
                        <label>Fax</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="fax" value="{{$data->fax}}"  class="form-control" >
                            </div>
                        </div>
                        <label>E-Mail</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="email" value="{{$data->email}}"  class="form-control" >
                            </div>
                        </div>
                        <label>SMTP Server</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="smtpserver" value="{{$data->smtpserver}}"  class="form-control" >
                            </div>
                        </div>
                        <label>SMTP E-Mail</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="smtpserver" value="{{$data->smtpemail}}"  class="form-control" >
                            </div>
                        </div>
                        <label>SMTP Password</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="password" name="smtppassword" value="{{$data->smtppassword}}"  class="form-control" >
                            </div>
                        </div>
                        <label>SMTP Port</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="smtpport" value="{{$data->smtpport}}"  class="form-control" >
                            </div>
                        </div>
                        <label>Facebook</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="facebook" value="{{$data->facebook}}"  class="form-control" >
                            </div>
                        </div>
                        <label>Instagram</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="instagram" value="{{$data->instagram}}"  class="form-control" >
                            </div>
                        </div>
                        <label>Twitter</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="twitter" value="{{$data->twitter}}"  class="form-control" >
                            </div>
                        </div>
                        <label>About Us</label>
                        <div class="form-group">
                            <textarea name="aboutus">{{$data->detail}}</textarea>
                            <script>
                                CKEDITOR.replace( 'aboutus' );
                            </script>
                        </div>
                        <label>Contact</label>
                        <div class="form-group">
                            <textarea name="contact">{{$data->detail}}</textarea>
                            <script>
                                CKEDITOR.replace( 'contact' );
                            </script>
                        </div>
                        <label>References</label>
                        <div class="form-group">
                            <textarea name="references">{{$data->detail}}</textarea>
                            <script>
                                CKEDITOR.replace( 'references' );
                            </script>
                        </div>
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <label>Status</label>
                            <select class="form-control select2" name="status" style="width: 100%;">
                                <option selected="selected">{{$data->status}}</option>
                                <option>False</option>
                                <option>True</option>
                            </select>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Edit Setting</button>
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
