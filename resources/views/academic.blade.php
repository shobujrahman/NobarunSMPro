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
        <h1>Academic</h1>
    </div>
</header>


<!-- container -->
<section class="container">
    <div class="row">
        <br>
        <img src="user_assets/images/academic.jpg" alt="" style="height: 460px;width: 1161px;">
    </div>
    <div class="row">

        <!-- main content -->

        <section class="container">
            <div class="heading">
                <!-- Heading -->
                <h3>Our Academic</h3>
                <br />
            </div>
            <!-- <div class="row flat">
                <div class="col-lg-2 col-md-2 col-xs-6">
                    <ul class="plan plan1 featured">
                        <li class="plan-name">Class 6
                        </li>
                        <li class="plan-price">
                            <h4>Section</h4>
                            <strong>3</strong>
                        </li>
                        <li>
                            <h4>Routine</h4>
                            <strong>3</strong>
                        </li>
                        <li>
                            <h4>Textbook</h4>
                            <strong>9</strong>
                        </li>
                        <li>
                            <h4>Syllabus</h4>
                            <strong>1</strong>
                        </li>
                        <li>
                            <h4>Test Method</h4>
                            <strong>30</strong>
                        </li>
                        <li>
                            <h4>Daily Attendance</h4>
                            <strong>310</strong>
                        </li>
                        <li class="plan-action">
                            <a href="{{('/student/login')}}" class="btn">Sign In</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-2 col-xs-6">
                    <ul class="plan plan2 ">
                        <li class="plan-name">Class 7
                        </li>
                        <li class="plan-price">
                            <h4>Section</h4>
                            <strong>3</strong>
                        </li>
                        <li>
                            <h4>Routine</h4>
                            <strong>3</strong>
                        </li>
                        <li>
                            <h4>Textbook</h4>
                            <strong>9</strong>
                        </li>
                        <li>
                            <h4>Syllabus</h4>
                            <strong>1</strong>
                        </li>
                        <li>
                            <h4>Test Method</h4>
                            <strong>30</strong>
                        </li>
                        <li>
                            <h4>Daily Attendance</h4>
                            <strong>310</strong>
                        </li>
                        <li class="plan-action">
                            <a href="{{('/student/login')}}" class="btn">Sign In</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-6">
                    <ul class="plan plan3 featured">
                        <li class="plan-name">Class 8
                        </li>
                        <li class="plan-price">
                            <h4>Section</h4>
                            <strong>3</strong>
                        </li>
                        <li>
                            <h4>Routine</h4>
                            <strong>3</strong>
                        </li>
                        <li>
                            <h4>Textbook</h4>
                            <strong>9</strong>
                        </li>
                        <li>
                            <h4>Syllabus</h4>
                            <strong>1</strong>
                        </li>
                        <li>
                            <h4>Test Method</h4>
                            <strong>30</strong>
                        </li>
                        <li>
                            <h4>Daily Attendance</h4>
                            <strong>310</strong>
                        </li>
                        <li class="plan-action">
                            <a href="{{('/student/login')}}" class="btn">Sign In</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-6">
                    <ul class="plan plan4">
                        <li class="plan-name">Class 9
                        </li>
                        <li class="plan-price">
                            <h4>Section</h4>
                            <strong>3</strong>
                        </li>
                        <li>
                            <h4>Routine</h4>
                            <strong>3</strong>
                        </li>
                        <li>
                            <h4>Textbook</h4>
                            <strong>9</strong>
                        </li>
                        <li>
                            <h4>Syllabus</h4>
                            <strong>1</strong>
                        </li>
                        <li>
                            <h4>Test Method</h4>
                            <strong>30</strong>
                        </li>
                        <li>
                            <h4>Daily Attendance</h4>
                            <strong>310</strong>
                        </li>
                        <li class="plan-action">
                            <a href="{{('/student/login')}}" class="btn">Sign In</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-6">
                    <ul class="plan plan5 featured">
                        <li class="plan-name">Class 10
                        </li>
                        <li class="plan-price">
                            <h4>Section</h4>
                            <strong>3</strong>
                        </li>
                        <li>
                            <h4>Routine</h4>
                            <strong>3</strong>
                        </li>
                        <li>
                            <h4>Textbook</h4>
                            <strong>9</strong>
                        </li>
                        <li>
                            <h4>Syllabus</h4>
                            <strong>3</strong>
                        </li>
                        <li>
                            <h4>Test Method</h4>
                            <strong>30</strong>
                        </li>
                        <li>
                            <h4>Daily Attendance</h4>
                            <strong>310</strong>
                        </li>
                        <li class="plan-action">
                            <a href="{{('/student/login')}}" class="btn">Sign In</a>
                        </li>
                    </ul>
                </div>
            </div> -->

            <div class="row flat">
                @foreach ($academicDetails as $item)
                <div class="col-lg-2 col-md-2 col-xs-6">
                    @if ($loop->index % 2 === 0)
                    <ul class="plan plan1 featured">
                        @else
                        <ul class="plan plan2">
                            @endif
                            <li class="plan-name">{{ $item['academic_name'] }}</li>
                            <li class="plan-price">
                                <h4>Section</h4>
                                <strong>{{ $item['section'] }}</strong>
                            </li>
                            <li>
                                <h4>Routine</h4>
                                <strong>{{ $item['routine'] }}</strong>
                            </li>
                            <li>
                                <h4>Textbook</h4>
                                <strong>{{ $item['text_book'] }}</strong>
                            </li>
                            <li>
                                <h4>Total Students</h4>
                                <strong>{{ $item['total_student'] }}</strong>
                            </li>
                            <li>
                                <h4>Male Students</h4>
                                <strong>{{ $item['male_student'] }}</strong>
                            </li>
                            <li>
                                <h4>Female Students</h4>
                                <strong>{{ $item['female_student'] }}</strong>
                            </li>

                            <!-- Add other list items here -->
                            <li class="plan-action">
                                <a href="{{ url('/student/login') }}" class="btn">Sign In</a>
                            </li>
                        </ul>
                </div>
                @endforeach
            </div>



        </section>

        <!-- /main -->

        <!-- Sidebar -->

        <!-- /Sidebar -->

    </div>
</section>
<!-- /container -->

@endsection
<!-- require 'user_layout/footer.php'; -->