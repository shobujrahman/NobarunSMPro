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
                                Index View (Teacher Access)
                            </h2>
                            <ul class="header-dropdown m-r--6">
                            <a href="{{ ('/admin/teacheraccess/add') }}" type="button" title="Add New" class="btn bg-green btn-circle-lg waves-effect waves-circle waves-float">
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
                                            <th>Joining Date</th>
                                            <th>Access Id</th>
                                            <th>Access Password</th>
                                            <th>Profile Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Jenette</td>
                                            <td>Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>Muktagacha, Mymensingh</td>
                                            <td>nbnteacher@email.com</td>
                                            <td>017**00****</td>
                                            <td>01/03/2012</td>
                                            <td>1119370011</td>
                                            <td>Teacher@0011</td>
                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>

                                            <td>
                                            <a href="{{ ('/admin/teacheraccess/edit') }}" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="{{ ('/admin/teacheraccess/teacherviewprofile') }}" type="button" title="View Profile" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">visibility</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jenette</td>
                                            <td>Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>Muktagacha, Mymensingh</td>
                                            <td>nbnteacher@email.com</td>
                                            <td>017**00****</td>
                                            <td>01/03/2012</td>
                                            <td>1119370012</td>
                                            <td>Teacher@0012</td>
                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>

                                            <td>
                                            <a href="{{ ('/admin/teacheraccess/edit') }}" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="{{ ('/admin/teacheraccess/teacherviewprofile') }}" type="button" title="View Profile" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">visibility</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Jenette</td>
                                            <td>Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>Muktagacha, Mymensingh</td>
                                            <td>nbnteacher@email.com</td>
                                            <td>017**00****</td>
                                            <td>01/03/2012</td>
                                            <td>1119370013</td>
                                            <td>Teacher@0013</td>
                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>

                                            <td>
                                            <a href="{{ ('/admin/teacheraccess/edit') }}" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="{{ ('/admin/teacheraccess/teacherviewprofile') }}" type="button" title="View Profile" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">visibility</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Jenette</td>
                                            <td>Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>Muktagacha, Mymensingh</td>
                                            <td>nbnteacher@email.com</td>
                                            <td>017**00****</td>
                                            <td>01/03/2012</td>
                                            <td>1119370021</td>
                                            <td>Teacher@0014</td>
                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>

                                            <td>
                                            <a href="{{ ('/admin/teacheraccess/edit') }}" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="{{ ('/admin/teacheraccess/teacherviewprofile') }}" type="button" title="View Profile" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">visibility</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
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
