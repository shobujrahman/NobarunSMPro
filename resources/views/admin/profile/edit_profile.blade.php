
{{-- require '../../admin_layout/header.php'; --}}
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

                                    <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>

                                </ul>

                                <div class="tab-content">

                                    <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                        <form class="form-horizontal">
                                        <div class="form-group">
                                                <label for="Institutename" class="col-sm-2 control-label">Institute Name</label>
                                                <div class="col-sm-4">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="Institutename" name="Institutename" placeholder="Institute Name" value="Nabarun Bidyaniketon" disabled>
                                                    </div>
                                                </div>

                                                <label for="Accessname" class="col-sm-2 control-label">Access Name</label>
                                                <div class="col-sm-4">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="Accessname" name="Accessname" placeholder="Access Nname" value="Admin" disabled>
                                                    </div>
                                                </div>

                                                <label for="Accesspassword" class="col-sm-2 control-label">Access Password</label>
                                                <div class="col-sm-4">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="Accesspassword" name="Accesspassword" placeholder="Access Password" value="123213514" disabled>
                                                    </div>
                                                </div>

                                                <label for="Email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-4">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="admin@gmail.com" disabled>
                                                    </div>
                                                </div>



                                            </div>

                                            <div class="form-group">

                                                <label for="Firstname" class="col-sm-2 control-label">First Name</label>
                                                <div class="col-sm-4">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="Firstname" name="Firstname" placeholder="First Nname" value="Revert" required>
                                                    </div>
                                                </div>

                                                <label for="Lastname" class="col-sm-2 control-label">Last Name</label>
                                                <div class="col-sm-4">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="Last Nname" value="Technology" required>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label for="Designation" class="col-sm-2 control-label">Designation</label>
                                                <div class="col-sm-2">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="Designation" name="Designation" placeholder="Teacher/Head Teacher" value="Teacher/Head Teacher" required>
                                                    </div>
                                                </div>

                                                <label for="Contact" class="col-sm-1 control-label">Contact</label>
                                                <div class="col-sm-2">
                                                    <div class="form-line">
                                                        <input type="number" class="form-control" id="Contact" name="Contact" placeholder="017********" value="01711005566" required>
                                                    </div>
                                                </div>

                                                <label for="Street" class="col-sm-1 control-label">Street</label>
                                                <div class="col-sm-3">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="Street" name="Street" placeholder="Street" value="Collage Road" required>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="form-group">

                                                <label for="City" class="col-sm-2 control-label">City</label>
                                                <div class="col-sm-2">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="City" name="City" placeholder="City" value="Muktagacha" required>
                                                    </div>
                                                </div>

                                                <label for="Division" class="col-sm-1 control-label">Division</label>
                                                <div class="col-sm-2">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="Division" name="Division" placeholder="Division" value="Mymensingh" required>
                                                    </div>
                                                </div>

                                                <label for="Userimage" class="col-sm-1 control-label">User Image</label>
                                                <div class="col-sm-2">
                                                    <div class="form-line">
                                                        <input type="file" class="form-control" id="Userimage" name="Userimage" required>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-1 col-sm-10">

                                                    <a href="{{ ('/admin/profile') }}" type="button" class="btn btn-danger waves-effect">Back</a>
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
{{-- require '../../admin_layout/footer.php'; --}}

