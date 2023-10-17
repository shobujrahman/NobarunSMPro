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
                        <h2>Add Details View</h2>
                    </div>

                    <div class="body">
                        <form id="frmFileUpload" class="" action="{{url('/admin/content/details_store/'.$content->id)}}"
                            method="post" enctype="multipart/form-data">@csrf
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="name">Name</label>
                                            <input type="text" name="title" class="form-control" placeholder="Name" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="ckeditor" name="description"></textarea>
                                    </div>
                                </div>

                                <a href="{{ ('/admin/content/details_index/'.$content->id) }}" type="button"
                                    class="btn btn-danger waves-effect">Back</a>
                                <button type="submit" class="btn btn-success waves-effect">Save</button>
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
