{{-- require '../../admin_layout/header.php'; --}}
@extends('layouts.admin_layout.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                MEMBER MANAGEMENT
            </h2>
        </div>
        <!-- #END# Basic Examples -->
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <!-- Index Details View -->
                            {{$member_type->title}} Details View
                        </h2>

                        <ul class="header-dropdown m-r--6">
                            <a href="{{ ('/admin/member/'. $member_type->id .'/details_add') }}" type="button"
                                title="Add New"
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
                                        <th>Designation</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($member_details as $member_detail)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$member_detail->name}}</td>
                                        <td>{{$member_detail->designation}}</td>
                                        <td>{{$member_detail->address}}</td>
                                        <td>{{$member_detail->contact}}</td>
                                        <td>{{$member_detail->email}}</td>
                                        <td>
                                            {{strip_tags($member_detail->description)}}
                                        </td>

                                        <td>
                                            <img class="media-object"
                                                src="{{asset('images/member-images/'.$member_detail->image)}}"
                                                width="50" height="50">
                                        </td>

                                        <td>
                                            <a href="{{ url('/admin/member/' . $member_type->id . '/details_edit/' . $member_detail->id) }}"
                                                type="button" title="Edit"
                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="{{url('/admin/member/'.$member_type->id.'/details_delete/'.$member_detail->id)}}"
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

{{-- require '../../admin_layout/footer.php'; --}}
