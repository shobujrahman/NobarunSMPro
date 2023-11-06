<!--/**-->
<!--* Created by atom.-->
<!--* User: RPJ-->
<!--* Date: 1/21/2021-->
<!--* Time: 03:13 PM-->
<!--*/-->
@extends('layouts.user_layout.layout')
@section('content')
<!-- require 'user_layout/header.php'; -->
@php
$opprtunityDetailsArray = $opprtunityDetails->toArray(); // Convert the Eloquent Collection to a PHP array
$chunks = array_chunk($opprtunityDetailsArray, 2); // Split the array into chunks of 2 elements each
@endphp
<header id="head" class="secondary">
    <div class="container">
        <h1>Opportunity</h1>
    </div>
</header>


<!-- container -->
<section class="container">
    <div class="row">
        <br>
        <img src="{{ asset('images/content-images/' . $image->image) }}" alt="" style="height: 460px;width: 1161px;">
    </div>
    <div class="row">

        <!-- main content -->
        <div id="courses">
            <section class="container">
                <h3>Our Opportunity</h3>
                @foreach ($chunks as $chunk)
                <div class="row">
                    @foreach ($chunk as $opprtunityDetail)
                    <div class="col-md-6">
                        <div class="featured-box">
                            <div class="text">
                                <h3>{{$opprtunityDetail['title']}}</h3>
                                <p>
                                    {!! $opprtunityDetail['description'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="featured-box">
                            <div class="text">
                                <h3>Library</h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-box">
                            <div class="text">
                                <h3>Science Lab</h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="featured-box">
                            <div class="text">
                                <h3>Extra Class</h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="featured-box">
                        <div class="text">
                          <h3>Primary Treatment</h3>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                      </div>
                    </div>
                </div> -->
            </section>
        </div>
        <!-- /main -->

        <!-- Sidebar -->

        <!-- /Sidebar -->

    </div>
</section>
<!-- /container -->


<!-- require 'user_layout/footer.php'; -->
@endsection
