{{-- require '../../admin_layout/header.php'; --}}
@extends('layouts.admin_layout.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>MEMBER MANAGEMENT</h2>
        </div>

        <!-- CKEditor -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Edit (Committee/Governing Body/Heads of Institutions Received/Teacher Stuff)</h2>
                    </div>


                    <div class="body">
                        <form
                            action="{{ url('/admin/member/details_update/'.$member_type->id.'/'.$member_details->id) }}"
                            id="frmFileUpload" class="" method="post" enctype="multipart/form-data">@csrf
                            <input type="hidden" name="old_image" value="{{$member_details->image}}">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="name">Name</label>
                                            <input name="name" type="text" class="form-control"
                                                value="{{$member_details->name}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Designation</label>
                                            <input name="designation" type="text" class="form-control"
                                                value="{{$member_details->designation}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Address</label>
                                            <input name="address" type="text" class="form-control"
                                                placeholder="Collage Road" value="{{$member_details->address}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Contact</label>
                                            <input name="contact" type="number" class="form-control"
                                                placeholder="0174.**.0*" value="{{$member_details->contact}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>E-mail</label>
                                            <input name="email" type="email" class="form-control"
                                                value="{{$member_details->email}}" placeholder="member@gmail.com" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input name="image" type="file" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <label for="InputDescription" class="col-sm-2 control-label">Description</label>

                                    <div class="col-sm-12">
                                        <div class="form-line">
                                            <textarea class="ckeditor" name="description">
                                            {{strip_tags($member_details->description)}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ ('/admin/member/details_index') }}" type="button"
                                    class="btn btn-danger waves-effect">Back</a>
                                <button type="submit" class="btn btn-success waves-effect">Update</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <!-- #END# CKEditor -->

    </div>
</section>

@endsection

{{-- require '../../admin_layout/footer.php'; --}}
