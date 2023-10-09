{{-- require '../../admin_layout/header.php'; --}}

@extends('layouts.admin_layout.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>CONTENT MANAGEMENT</h2>
        </div>

        <!-- CKEditor -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Edit (About/Administrative/Academic/Admission/Opportunity/Function)</h2>
                    </div>

                    <div class="body">
                        <form id="frmFileUpload" class=""
                            action="{{ url('/admin/content/details_update/'.$content->id.'/'.$contentDetails->id) }}"
                            method="post" enctype="multipart/form-data">@csrf
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="name">Name</label>
                                            <input name="title" value="{{$contentDetails->title}}" type="text"
                                                class="form-control" placeholder="Name" value="At a Glance" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="ckeditor" name="description">
                                        {{strip_tags($contentDetails->description)}}
                                    </textarea>
                                    </div>
                                </div>

                                <a href="{{ ('/admin/content/details_index') }}" type="button"
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
