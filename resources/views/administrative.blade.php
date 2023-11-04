<!--/**-->
<!--* Created by atom.-->
<!--* User: RPJ-->
<!--* Date: 1/21/2021-->
<!--* Time: 03:13 PM-->
<!--*/-->
@extends('layouts.user_layout.layout')
@section('content')
<!-- require 'user_layout/header.php'; -->

<header id="head" class="secondary">
    <div class="container">
        <h1>Administrative</h1>
    </div>
</header>


<!-- container -->
<section class="container">
    <div class="row">
        <br>
        <img src="user_assets/images/administrative.jpg" alt="" style="height: 460px;width: 1161px;">
    </div>

    <div class="row">

        <!-- main content -->
        <section class="col-sm-12 maincontent">
            @foreach($administrativeDetails as $administrativeDetail)
            <h3>{{$administrativeDetail->title}}</h3>
            <p>
                {!! $administrativeDetail->description !!}
            </p>
            @endforeach

            <!-- members section -->
            @foreach($members as $member)
            <h3>Meet {{$member->title}}</h3>

            @foreach($member->member_details as $member_detail)
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member">
                        <!-- Image Hover Block -->
                        <div class="member-img portfolio-item">
                            <!-- Image  -->
                            <img class="img-responsive"
                                src="{{ asset('images/member-images/'. $member_detail->image) }}" alt="">
                            <div class="portfolio-desc align-center">
                                <div class="folio-info">
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                        data-target="#myModal_{{$member_detail->id}}">Details</button>
                                </div>
                            </div>
                        </div>
                        <!-- Member Details -->
                        <h4>{{$member_detail->name}}</h4>
                        <!-- Designation -->
                        <span class="pos">{{$member_detail->designation}}</span>
                        <!-- <div class="team-socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div> -->
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal_{{$member_detail->id}}" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">{{$member_detail->name}}</h3>
                            <h4 class="modal-title">{{$member_detail->designation}}</h4>
                            <h6 class="modal-title">{{$member_detail->address}}</h6>
                            <h6 class="modal-title">{{$member_detail->contact}}</h6>
                            <h6 class="modal-title">{{$member_detail->email}}</h6>
                        </div>
                        <div class="modal-body">
                            <p>
                                {{$member_detail->name}} is {{$member_detail->designation}} of our institution.
                                {!! $member_detail->description !!}
                            </p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
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
