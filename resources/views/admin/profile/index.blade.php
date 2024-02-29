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
                            @if(!empty($adminProfile->image))
                            <img height="128" width="128" alt="no image"
                                src="{{asset('admin_assets/images/admin-images/'.$adminProfile->image)}}" />
                            @else
                            <img src="../../admin_assets/user10.jpeg" alt="AdminBSB - Profile Image" height="128"
                                width="128" />
                            @endif
                        </div>
                        <div class="content-area">
                            <h3>
                                {{ strtoupper($adminProfile->first_name) . ' ' . strtoupper($adminProfile->last_name) }}
                            </h3>
                            <h5>{{ strtoupper($adminProfile->designation)}}</h5>

                            <h6>{{strtoupper($adminProfile->user->name)}}</h6>
                            <h4>{{strtoupper($adminProfile->user->institute)}}</h4>
                        </div>
                    </div>
                    <div class="profile-footer">
                        <ul>
                            <li>
                                <span>Address: </span>
                                <span>
                                    {{ strtoupper($adminProfile->street) . ',' . ' ' . strtoupper($adminProfile->city) . ',' . ' ' . strtoupper($adminProfile->division) }}
                                </span>
                            </li>
                            <li>
                                <span>Email: </span>
                                <span>{{$adminProfile->user->email}}</span>
                            </li>
                            <li>
                                <span>Contact: </span>
                                <span>{{$adminProfile->contact}}</span>
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