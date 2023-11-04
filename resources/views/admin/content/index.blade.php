{{-- require '../../admin_layout/header.php'; --}}
@extends('layouts.admin_layout.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                CONTENT MANAGEMENT
            </h2>
        </div>
        <!-- #END# Basic Examples -->
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Content View
                        </h2>
                        <ul class="header-dropdown m-r--6">
                            <a href="{{ ('/admin/content/add') }}" type="button" title="Add New"
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
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Add Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($contents as $content)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{$content->title}}</td>
                                        <td>
                                            @if(!empty($content->image))
                                            <img style="width: 60px; height: 60px;" alt="no image"
                                                src="{{asset('images/content-images/'.$content->image)}}" />
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ ('/admin/content/'.$content->id.'/details_index') }}"
                                                type="button" title="Add"
                                                class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">add</i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ ('/admin/content/edit/'.$content->id) }}" type="button"
                                                title="Edit"
                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <!-- <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a> -->
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


{{-- require '../../admin_layout/footer.php'; --}}
