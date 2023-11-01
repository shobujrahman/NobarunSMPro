<!--/**-->
<!--* Created by atom.-->
<!--* User: RPJ-->
<!--* Date: 1/21/2021-->
<!--* Time: 03:13 PM-->
<!--*/-->

@extends('layouts.user_layout.layout')
@section('content')

@php
$functionDetailsArray = $functionDetails->toArray(); // Convert the Eloquent Collection to a PHP array
$chunks = array_chunk($functionDetailsArray, 2); // Split the array into chunks of 2 elements each
@endphp

<header id="head" class="secondary">
    <div class="container">
        <h1>Function</h1>
    </div>
</header>


<!-- container -->
<section class="container">
    <div class="row">
        <br>
        <img src="user_assets/images/functions.jpg" alt="" style="height: 460px;width: 1161px;">
    </div>
    <div class="row">
        <!-- main content -->
        <div id="courses">
            <section class="container">
                <h3>Our Functions</h3>

                @foreach ($chunks as $chunk)
                <div class="row">
                    @foreach ($chunk as $functionDetails)
                    <div class="col-md-6">
                        <div class="featured-box">
                            <div class="text">
                                <h3>{{$functionDetails['title']}}</h3>
                                <p>
                                    {!! $functionDetails['description'] !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
                @endforeach
            </section>
        </div>
        <!-- /main -->

        <!-- Sidebar -->

        <!-- /Sidebar -->

    </div>
</section>
<!-- /container -->


{{-- // require 'user_layout/footer.php'; --}}
@endsection