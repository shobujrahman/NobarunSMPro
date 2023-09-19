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

            <form class="form-light mt-20" role="form">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Your name">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="Phone number">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" id="message" placeholder="Write you message here..."
                        style="height:100px;"></textarea>
                </div>
                <button type="submit" class="btn btn-two">Send message</button>
                <p><br /></p>
            </form>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="section-title">Office Address</h3>
                    <div class="contact-info">
                        <h5 style="color: #105249">Address</h5>
                        <p>Muktagacha, Mymensingh</p>

                        <h5 style="color: #105249">Email</h5>
                        <p>nabarunbidyaniketon@gmail.com</p>

                        <h5 style="color: #105249">web address</h5>
                        <p>www.nbn.edu.bd</p>

                        <h5 style="color: #105249">Phone</h5>
                        <p>09028-75234<br>01716-923204<br>01309-111937</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /container -->


<!-- require 'user_layout/footer.php'; -->

@endsection