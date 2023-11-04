<!--* Created by atom.-->
<!--* User: RPJ-->
<!--* Date: 1/21/2021-->
<!--* Time: 03:13 PM-->
<!--*/-->
@extends('layouts.user_layout.layout')
@section('content')

@php
$noticeArray = $notice->toArray(); // Convert the Eloquent Collection to a PHP array
$chunks = array_chunk($noticeArray, 2); // Split the array into chunks of 2 elements each
@endphp


<header id="head" class="secondary">
    <div class="container">
        <h1>Notice</h1>
    </div>
</header>

<div id="courses">
    <section class="container">
        <h3>All Notice</h3>
        @foreach ($chunks as $chunk)
        <div class="row">
            @foreach ($chunk as $notice)
            <div class="col-md-6">
                <div class="featured-box">
                    <div class="text">
                        <h3>{{$notice['title']}}</h3>
                        <p>
                            {!! $notice['description'] !!}
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
                        <h3>Responsive Design</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="featured-box">
                    <div class="text">
                        <h3>HTML5/CSS3</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="featured-box">
                    <div class="text">
                        <h3>Web App Dev</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="featured-box">
                    <div class="text">
                        <h3>Mobile App Dev</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="featured-box">
                    <div class="text">
                        <h3>Web App Dev</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="featured-box">
                    <div class="text">
                        <h3>Data Base</h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </div>
                </div>
            </div>
        </div> -->
    </section>
</div>

<!-- container -->

<!-- /container -->

<!-- require 'user_layout/footer.php'; -->
@endsection
