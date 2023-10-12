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
                            <a href="{{ url('/admin/academic/userviewadd') }}" type="button" title="Add New"
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
                                    @foreach ($academic_user_view as $academic)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$academic->academic_name}}</td>
                                        <td>{{$academic->section}}</td>
                                        <td>{{$academic->routine}}</td>
                                        <td>{{$academic->text_book}}</td>
                                        <td>{{$academic->total_student}}</td>
                                        <td>{{$academic->male_student}}</td>
                                        <td>{{$academic->female_student}}</td>
                                        <td>
                                            <a href="{{ url('/admin/academic/userviewedit/'. $academic->id) }}"
                                                type="button" title="Edit"
                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="{{url('/admin/academic/userviewdelete/'.$academic->id)}}"
                                                type="button" title="Delete"
                                                class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete_forever</i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
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
