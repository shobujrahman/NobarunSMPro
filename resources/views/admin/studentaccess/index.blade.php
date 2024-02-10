@extends('layouts.admin_layout.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                ACCESS MANAGEMENT
            </h2>
        </div>
        <!-- #END# Basic Examples -->
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Index View (Student Access)
                        </h2>
                        <ul class="header-dropdown m-r--6">
                            <a href="{{ ('/admin/studentaccess/add') }}" type="button" title="Add New"
                                class="btn bg-green btn-circle-lg waves-effect waves-circle waves-float">
                                <i class="material-icons">add_task</i>
                            </a>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Designation</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Contact No.</th>
                                        <th>Addmission Date</th>
                                        <th>Addmission Class</th>
                                        <th>Father Name</th>
                                        <th>Mother Name</th>
                                        <th>Access Id</th>
                                        <th>Access Password</th>
                                        <th>Profile Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Jon</td>
                                        <td>Catter</td>
                                        <td>Student</td>
                                        <td>Muktagacha, Mymensingh</td>
                                        <td>nbnstudent@email.com</td>
                                        <td>017**00****</td>
                                        <th>02/15/2010</th>
                                        <th>6</th>
                                        <th>F.Prasad Paul</th>
                                        <th>M.Prasad Paul</th>
                                        <td>1119370011</td>
                                        <td>Student@0011</td>
                                        <td>
                                            <img class="media-object" src="../../admin_assets/images/user-lg.jpg"
                                                width="50" height="50">
                                        </td>

                                        <td>
                                            <a href="{{ ('/admin/studentaccess/edit') }}" type="button" title="Edit"
                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="{{ ('/admin/studentaccess/studentviewprofile') }}" type="button"
                                                title="View Profile"
                                                class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete"
                                                class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete_forever</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jon</td>
                                        <td>Catter</td>
                                        <td>Student</td>
                                        <td>Muktagacha, Mymensingh</td>
                                        <td>nbnstudent@email.com</td>
                                        <td>017**00****</td>
                                        <th>02/15/2010</th>
                                        <th>6</th>
                                        <th>F.Prasad Paul</th>
                                        <th>M.Prasad Paul</th>
                                        <td>1119370012</td>
                                        <td>student@0012</td>
                                        <td>
                                            <img class="media-object" src="../../admin_assets/images/user-lg.jpg"
                                                width="50" height="50">
                                        </td>

                                        <td>
                                            <a href="{{ ('/admin/studentaccess/edit') }}" type="button" title="Edit"
                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="{{ ('/admin/studentaccess/studentviewprofile') }}" type="button"
                                                title="View Profile"
                                                class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete"
                                                class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete_forever</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Jon</td>
                                        <td>Catter</td>
                                        <td>Student</td>
                                        <td>Muktagacha, Mymensingh</td>
                                        <td>nbnstudent@email.com</td>
                                        <td>017**00****</td>
                                        <th>02/15/2010</th>
                                        <th>6</th>
                                        <th>F.Prasad Paul</th>
                                        <th>M.Prasad Paul</th>
                                        <td>1119370013</td>
                                        <td>student@0013</td>
                                        <td>
                                            <img class="media-object" src="../../admin_assets/images/user-lg.jpg"
                                                width="50" height="50">
                                        </td>

                                        <td>
                                            <a href="{{ ('/admin/studentaccess/edit') }}" type="button" title="Edit"
                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="{{ ('/admin/studentaccess/studentviewprofile') }}" type="button"
                                                title="View Profile"
                                                class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete"
                                                class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete_forever</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Jon</td>
                                        <td>Catter</td>
                                        <td>Student</td>
                                        <td>Muktagacha, Mymensingh</td>
                                        <td>nbnstudent@email.com</td>
                                        <td>017**00****</td>
                                        <th>02/15/2010</th>
                                        <th>6</th>
                                        <th>F.Prasad Paul</th>
                                        <th>M.Prasad Paul</th>
                                        <td>1119370021</td>
                                        <td>student@0014</td>
                                        <td>
                                            <img class="media-object" src="../../admin_assets/images/user-lg.jpg"
                                                width="50" height="50">
                                        </td>

                                        <td>
                                            <a href="{{ ('/admin/studentaccess/edit') }}" type="button" title="Edit"
                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="{{ ('/admin/studentaccess/studentviewprofile') }}" type="button"
                                                title="View Profile"
                                                class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete"
                                                class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete_forever</i>
                                            </a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>

@endsection
