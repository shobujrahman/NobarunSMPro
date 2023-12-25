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
                            <h2>Edit (Teacher Access)</h2>
                        </div>

                        <div class="body">
                        <form action="/" id="frmFileUpload" class="" method="post" enctype="multipart/form-data">
                        <div class="row clearfix">
                        <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" value="Jenette" />
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="lastname">Last Name</label>
                                            <input type="text" class="form-control" value="Caldwell" />
                                        </div>
                                    </div>
                                    </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                    <div class="form-line">
                                    <label for="designation">Designation</label>
                                    <input type="text" class="form-control" value="Development Lead" />
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="address">Address</label>
                                            <input type="text" class="form-control" value="Muktagacha, Mymensingh" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="email">E-mail</label>
                                            <input type="email" class="form-control" value="nbnteacher@email.com" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="contactno">Contact No.</label>
                                            <input type="number" class="form-control" value="01700000000" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="joiningdate">Joining Date</label>
                                            <input type="" class="form-control" value="02/15/1998" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                    <label for="accessid">Access Id</label>
                                    <input type="number" class="form-control" value="111937757859" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                    <label for="accesspassword">Access Password</label>
                                    <input type="password" class="form-control" value="Teacher@7578" disabled/>
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
                                <button type="submit" class="btn btn-success waves-effect">Update</button>
                        </form>
                        </div>


                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->

        </div>
    </section>

    @endsection
