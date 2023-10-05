<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nabarun Bidyaniketon|Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{url('login_assets/images/icons/img-01.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url ('login_assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url ('login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url ('login_assets/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url ('login_assets/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url ('login_assets/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url ('login_assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{url ('login_assets/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>

	<div class="wrapper">
        {{-- @include('layouts.login_layout.header') --}}
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="../../login_assets/images/img-01.png" alt="IMG">
                    </div>

                    @yield('content')

                </div>
            </div>
            </div>
        {{-- @include('layouts.login_layout.footer') --}}
    </div>




        <!--===============================================================================================-->
        <script src="{{url ('login_assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{url ('login_assets/vendor/bootstrap/js/popper.js') }}"></script>
        <script src="{{url ('login_assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{url ('login_assets/vendor/select2/select2.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{url ('login_assets/vendor/tilt/tilt.jquery.min.js') }}"></script>
        <script >
        $('.js-tilt').tilt({
        scale: 1.1
        })
        </script>
        <!--===============================================================================================-->
        <script src="{{url ('login_assets/js/main.js') }}"></script>

        </body>
        </html>
