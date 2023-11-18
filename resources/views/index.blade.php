<!--/**-->
<!--* Created by atom.-->
<!--* User: RPJ-->
<!--* Date: 1/21/2021-->
<!--* Time: 03:13 PM-->
<!--*/-->

@extends('layouts.user_layout.layout')
@section('content')

<!-- require 'user_layout/header.php'; -->
<!-- Header -->
<header id="head">
    <div class="container">
        <div class="heading-text">
            <h1 class="animated flipInY delay1" style="color: #ffd400">NBN Management System</h1>
            <h2 style="color: #46ef00">Come to the Path of Light</h2>
            <!--                 <a class="btn" href="" style="background: #9e1717;font-size: medium;font-family: emoji;">Let's Have a Tour</a>-->
        </div>

        <div class="fluid_container">
            <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">


                                            <div data-thumb="user_assets/images/slides/thumbs/img1.jpg" data-src="user_assets/images/slides/img1.jpg">
                                            </div>
                                            <div data-thumb="user_assets/images/slides/thumbs/img2.jpg" data-src="user_assets/images/slides/img2.jpg">
                                            </div>
                                            <div data-thumb="user_assets/images/slides/thumbs/img3.jpg" data-src="user_assets/images/slides/img3.jpg">
                                            </div>

                {{-- <div data-thumb="{{ asset('images/content-images/' . $home->image) }}"
                    data-src="{{ asset('images/content-images/' . $home->image) }}">
                    <!-- You can optionally include content here like a caption -->
                    <!-- <h2>..</h2> -->
                </div> --}}
                <!-- Additional slides can be added here with the same structure -->
            </div>
        </div><!-- .fluid_container -->
    </div>
</header>
<!-- /Header -->

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">
                            <img src="user_assets/images/about1.png" alt="" STYLE="height: 140px;width: 140px" />
                        </div>
                        <!--icon box top -->
                        <h4>About</h4>

                        <p><a href="{{ ('about' ) }}"><em>Read More</em></a></p>
                    </div>
                    <!--grey box -->
                </div>
                <!--/span3-->
                <div class="col-md-3">
                    <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">
                            <img src="user_assets/images/administration.jpg" alt=""
                                STYLE="height: 140px;width: 140px" />
                        </div>
                        <!--icon box top -->
                        <h4>Administrative</h4>
                        <p><a href="{{ ('administrative') }}"><em>Read More</em></a></p>
                    </div>
                    <!--grey box -->
                </div>
                <!--/span3-->
                <div class="col-md-3">
                    <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">
                            <img src="user_assets/images/academic.png" alt="" STYLE="height: 140px;width: 140px" />
                        </div>
                        <!--icon box top -->
                        <h4>Academic</h4>
                        <p><a href="{{ ('academic') }}"><em>Read More</em></a></p>
                    </div>
                    <!--grey box -->
                </div>
                <!--/span3-->
                <div class="col-md-3">
                    <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">
                            <img src="user_assets/images/opportunity.png" alt="" STYLE="height: 140px;width: 140px" />
                        </div>
                        <!--icon box top -->
                        <h4>Opportunity</h4>
                        <p><a href="{{ ('opportunity') }}"><em>Read More</em></a></p>
                    </div>
                    <!--grey box -->
                </div>
                <!--/span3-->

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">
                            <img src="user_assets/images/admission.png" alt="" STYLE="height: 140px;width: 140px" />
                        </div>
                        <!--icon box top -->
                        <h4>Admission</h4>
                        <p><a href="{{ ('admission') }}"><em>Read More</em></a></p>
                    </div>
                    <!--grey box -->
                </div>
                <!--/span3-->
                <div class="col-md-3">
                    <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">
                            <img src="user_assets/images/function.jpg" alt="" STYLE="height: 140px;width: 140px" />
                        </div>
                        <!--icon box top -->
                        <h4>Function</h4>
                        <p><a href="{{ ('function') }}.php"><em>Read More</em></a></p>
                    </div>
                    <!--grey box -->
                </div>
                <!--/span3-->
                <div class="col-md-3">
                    <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">
                            <img src="user_assets/images/photos.png" alt="" STYLE="height: 140px;width: 140px" />
                        </div>
                        <!--icon box top -->
                        <h4>Gallery</h4>
                        <p><a href="{{ ('gallery') }}"><em>Read More</em></a></p>
                    </div>
                    <!--grey box -->
                </div>
                <!--/span3-->
                <div class="col-md-3">
                    <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">
                            <img src="user_assets/images/contact.png" alt="" STYLE="height: 140px;width: 140px" />
                        </div>
                        <!--icon box top -->
                        <h4>Contact</h4>
                        <p><a href="{{ ('contact') }}"><em>Read More</em></a></p>
                    </div>
                    <!--grey box -->
                </div>
                <!--/span3-->
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <!--/span3-->
                <div class="col-md-3">
                    <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">
                            <img src="user_assets/images/notice.jpg" alt="" STYLE="height: 140px;width: 140px" />
                        </div>
                        <!--icon box top -->
                        <h4>Notice</h4>
                        <p><a href="{{ ('notice') }}"><em>Read More</em></a></p>
                    </div>
                    <!--grey box -->
                </div>
                <!--/span3-->
                <div class="col-md-3">
                    <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">
                            <img src="user_assets/images/iplink.jpg" alt="" STYLE="height: 140px;width: 140px" />
                        </div>
                        <!--icon box top -->
                        <h4>Important Link</h4>
                        <p><a href="{{ ('importantlink') }}"><em>Read More</em></a></p>
                    </div>
                    <!--grey box -->
                </div>
                <!--/span3-->
                <div class="col-md-3">
                </div>
                <!--/span3-->
            </div>
        </div>

        <div class="col-md-3">
            @include('layouts.user_layout.sidebar')
            <!-- require 'user_layout/sidebar.php'; -->
        </div>
    </div>
</div>
<!-- require 'user_layout/footer.php'; -->
@endsection
