
{{-- require '../../admin_layout/header.php'; --}}
@extends('layouts.admin_layout.layout')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                Academic MANAGEMENT
                </h2>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Index View (user view)
                            </h2>
                            <ul class="header-dropdown m-r--6">
                            <a href="{{ ('/admin/academic/userviewadd') }}" type="button" title="Add New" class="btn bg-green btn-circle-lg waves-effect waves-circle waves-float">
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
                                            <th>Academic Name</th>
                                            <th>Total Section</th>
                                            <th>Routine</th>
                                            <th>Text Book</th>
                                            <th>Total Student</th>
                                            <th>Male Student</th>
                                            <th>Female Student</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Class 6</td>
                                            <td>4</td>
                                            <td>3</td>
                                            <td>15</td>
                                            <td>500</td>
                                            <td>250</td>
                                            <td>50</td>
                                            <td>
                                            <a href="{{ ('/admin/academic/userviewedit') }}" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
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
{{-- require '../../admin_layout/footer.php'; --}}

