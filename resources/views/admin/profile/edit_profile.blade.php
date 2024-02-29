@extends('layouts.admin_layout.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-md-12 col-sm-9">
                <div class="card">
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">

                                <li role="presentation" class="active">
                                    <a href="#profile_settings" aria-controls="settings" role="tab"
                                        data-toggle="tab">Profile Settings</a>
                                </li>

                            </ul>

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                    <form class="form-horizontal" action="{{url('admin/updateProfile')}}" method="post"
                                        enctype="multipart/form-data">@csrf
                                        <div class="form-group">
                                            <label for="Institutename" class="col-sm-2 control-label">Institute
                                                Name</label>
                                            <div class="col-sm-4">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="Institutename"
                                                        name="institute" placeholder="Institute Name"
                                                        value="{{$adminDetails->user->institute}}" disabled>
                                                </div>
                                            </div>

                                            <label for="Accessname" class="col-sm-2 control-label">Access Name</label>
                                            <div class="col-sm-4">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="Accessname"
                                                        name="accessname" placeholder="Access Nname"
                                                        value="{{$adminDetails->user->name}}" disabled>
                                                </div>
                                            </div>

                                            <!-- <label for="Accesspassword" class="col-sm-2 control-label">
                                                Access Password
                                            </label>
                                            <div class="col-sm-4">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="Accesspassword"
                                                        name="accesspassword" placeholder="Access Password"
                                                        value="{{$adminDetails->user->password}}" disabled>
                                                </div>
                                            </div> -->

                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-4">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" id="Email" name="email"
                                                        placeholder="Email" value="{{$adminDetails->user->email}}"
                                                        disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <label for="Firstname" class="col-sm-2 control-label">First Name</label>
                                            <div class="col-sm-4">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="Firstname"
                                                        name="first_name" placeholder="First Nname"
                                                        value="{{$adminDetails->first_name ?? ''}}" required>
                                                </div>
                                            </div>

                                            <label for="Lastname" class="col-sm-2 control-label">Last Name</label>
                                            <div class="col-sm-4">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="Lastname"
                                                        name="last_name" placeholder="Last Nname"
                                                        value="{{$adminDetails->last_name ?? ''}}" required>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="Designation" class="col-sm-2 control-label">Designation</label>
                                            <div class="col-sm-2">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="Designation"
                                                        name="designation" placeholder="Teacher/Head Teacher"
                                                        value="{{$adminDetails->designation ?? ''}}" required>
                                                </div>
                                            </div>

                                            <label for="Contact" class="col-sm-1 control-label">Contact</label>
                                            <div class="col-sm-2">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="Contact" name="contact"
                                                        placeholder="017********"
                                                        value="{{$adminDetails->contact ?? ''}}" required>
                                                </div>
                                            </div>

                                            <label for="Street" class="col-sm-1 control-label">Street</label>
                                            <div class="col-sm-3">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="Street" name="street"
                                                        placeholder="Street" value="{{$adminDetails->street ?? ''}}"
                                                        required>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="form-group">

                                            <label for="City" class="col-sm-2 control-label">City</label>
                                            <div class="col-sm-2">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="City" name="city"
                                                        placeholder="City" value="{{$adminDetails->city ?? ''}}"
                                                        required>
                                                </div>
                                            </div>

                                            <label for="Division" class="col-sm-1 control-label">Division</label>
                                            <div class="col-sm-2">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="Division"
                                                        name="division" placeholder="Division"
                                                        value="{{$adminDetails->division ?? ''}}" required>
                                                </div>
                                            </div>

                                            <label for="Userimage" class="col-sm-1 control-label">User Image</label>
                                            <div class="col-sm-2">
                                                <div class="form-line">
                                                    <input type="file" class="form-control" id="Userimage" name="image">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-1 col-sm-10">

                                                <a href="{{ ('/admin/profile') }}" type="button"
                                                    class="btn btn-danger waves-effect">Back</a>
                                                <button type="submit" class="btn btn-success">SUBMIT</button>

                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection