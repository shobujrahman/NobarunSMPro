{{-- require '../../admin_layout/header.php'; --}}
@extends('layouts.admin_layout.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 col-sm-3">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                    <div class="profile-body">
                        <div class="image-area">
                            <img src="../../admin_assets/user10.jpeg" alt="AdminBSB - Profile Image" height="128"
                                width="128" />
                        </div>
                        <div class="content-area">
                            <h3>First Name & Last Name</h3>
                            <h5>Designation</h5>
                            <h6>Access Name</h6>
                            <h4>Institute Name</h4>
                        </div>
                    </div>
                    <div class="profile-footer">
                        <ul>
                            <li>
                                <span>Address: </span>
                                <span>Street, City, Division</span>
                            </li>
                            <li>
                                <span>Email: </span>
                                <span>{{$adminProfile->email}}</span>
                            </li>
                            <li>
                                <span>Contact: </span>
                                <span>017****00**</span>
                            </li>
                        </ul>
                        <!-- <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button> -->
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection

{{-- require '../../admin_layout/footer.php'; --}}
