@extends('layouts.admin_layout.layout')
@section('content')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ACCESS MANAGEMENT</h2>
            </div>

            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add (Teacher Access)</h2>
                        </div>

                        <div class="body">
                        <form action="/" id="frmFileUpload" class="" method="post" enctype="multipart/form-data">
                        <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" placeholder="First Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="lastname">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                    <label for="designation">Designation</label>
                                    <input type="text" class="form-control" placeholder="Designation" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="address">Address</label>
                                            <input type="text" class="form-control" placeholder="Address" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="email">E-mail</label>
                                            <input type="email" class="form-control" placeholder="nbnteacher@email.com" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="contactno">Contact No.</label>
                                            <input type="number" class="form-control" placeholder="01700000000" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="joiningdate">Joining Date</label>
                                            <input type="date" class="form-control" placeholder="00/00/0000" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                    <label for="accessid">Access Id</label>
                                    <input type="number" class="form-control" placeholder="Access Id" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                    <label for="accesspassword">Access Password</label>
                                    <input type="password" class="form-control" placeholder="Access Password" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" class="form-control" />
                                    </div>
                                </div>


                            </div>
                            <a href="{{ ('/admin/teacheraccess/index') }}" type="button" class="btn btn-danger waves-effect">Back</a>
                                <button type="submit" class="btn btn-success waves-effect">Save</button>
                        </form>
                        </div>


                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->

        </div>
    </section>


    @endsection
