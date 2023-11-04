<!--/**-->
<!--* Created by atom.-->
<!--* User: RPJ-->
<!--* Date: 1/21/2021-->
<!--* Time: 03:13 PM-->
<!--*/-->

<!--  require 'user_layout/header.php'; -->
@extends('layouts.user_layout.layout')
@section('content')

<header id="head" class="secondary">
    <div class="container">
        <h1>Contact Us</h1>
    </div>
</header>


<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3 class="section-title">Your Message</h3>
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif
            <form id="sendMsg" class="form-light mt-20" role="form" action="{{url('/contact/send-message')}}"
                method="POST" enctype="multipart/form-data">@csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Your name" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email address" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone number" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="message" id="message" placeholder="Write you message here..."
                        style="height:100px;" required></textarea>
                </div>
                <button type="submit" class="btn btn-two">Send message</button>
                <p><br /></p>
            </form>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="section-title">Office Address</h3>
                    @foreach($contact as $contact)
                    <div class="contact-info">
                        <h5 style="color: #105249">{{$contact->title}}</h5>
                        <p>{!! $contact->description !!}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /container -->


<!-- require 'user_layout/footer.php'; -->

@endsection