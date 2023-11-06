<!--/**-->
<!--* Created by atom.-->
<!--* User: RPJ-->
<!--* Date: 1/21/2021-->
<!--* Time: 03:13 PM-->
<!--*/-->

<!-- require 'user_layout/header.php'; -->

@extends('layouts.user_layout.layout')
@section('content')
<header id="head" class="secondary">
    <div class="container">
        <h1>About Us</h1>
    </div>
</header>


<!-- container -->
<section class="container">
    <div class="row">
        <br>
        <img src="{{ asset('images/content-images/' . $aboutImage->image) }}" alt=""
            style="height: 460px;width: 1161px;">
    </div>
    <div class="row">

        <!-- main content -->
        <section class="col-sm-12 maincontent">
            @foreach($aboutDetails as $aboutDetail)
            <h3>{{$aboutDetail->title}}</h3>
            <p>
                {!! $aboutDetail->description !!}
            </p>

            @endforeach
        </section>
        <!-- /main -->

        <!-- Sidebar -->

        <!-- /Sidebar -->

    </div>
</section>
<!-- /container -->


<!-- require 'user_layout/footer.php'; -->
@endsection
