<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title> @yield('title') </title>
    <meta name="description" content=" @yield('description') ">
    <meta name="keywords" content=" @yield('keywords') ">
    <meta name="author" content="emretsdmr">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    @yield('css')
    @yield('headerjs')
</head>

<body>
@include('home._sidebar')
@include('home._header')
@include('home._slider')


@section('content')
içerik alanı
@show

@include('home._footer')
@yield('footerjs')
</body>

</html>
