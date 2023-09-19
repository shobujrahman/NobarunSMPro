<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NBN High School-Online Education">
    <meta name="author" content="RTS">
    <title>Nabarun Bidyaniketon</title>
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

    <link rel="icon" href="{{url('user_assets/images/logo1.png')}}">

    <link rel="stylesheet" href="{{url('user_assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{url('user_assets/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{url('user_assets/css/bootstrap-theme.css')}}" media="screen">

    <link rel="stylesheet" type="text/css" href="{{url('user_assets/css/isotope.css')}}" media="screen" />

    <link rel="stylesheet" href="{{url('user_assets/js/fancybox/jquery.fancybox.css')}}" type="text/css"
        media="screen" />

    <link rel="stylesheet" href="{{url('user_assets/css/style.css')}}">

    <link rel="stylesheet" id='camera-css' href='{{url("user_assets/css/camera.css")}}' type='text/css' media='all'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">

        @include('layouts.user_layout.header')

        @yield('content')
        @include('layouts.user_layout.footer')


    </div>


    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="{{url('user_assets/js/modernizr-latest.js')}}"></script>

    <script type='text/javascript' src="{{url('user_assets/js/jquery.min.js')}}"></script>

    <script type='text/javascript' src="{{url('user_assets/js/fancybox/jquery.fancybox.pack.js')}}"></script>

    <script type='text/javascript' src="{{url('user_assets/js/jquery.mobile.customized.min.js')}}"></script>

    <script type='text/javascript' src="{{url('user_assets/js/jquery.easing.1.3.js')}}"></script>

    <script type='text/javascript' src="{{url('user_assets/js/camera.min.js')}}"></script>

    <script src="{{url('user_assets/js/jquery.cslider.js')}}"></script>

    <script src="{{url('user_assets/js/jquery.isotope.min.js')}}"></script>

    <script src="{{url('user_assets/js/bootstrap.min.js')}}"></script>

    <script src="{{url('user_assets/js/custom.js')}}"></script>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>
    jQuery(function() {

        jQuery('#camera_wrap_4').camera({
            transPeriod: 500,
            time: 3000,
            height: '600',
            loader: 'false',
            pagination: true,
            thumbnails: false,
            hover: false,
            playPause: false,
            navigation: false,
            opacityOnGrid: false,
            imagePath: 'assets/images/'
        });

    });
    </script>
</body>

</html>