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
                        <form id="frmFileUpload" class="" action="{{ url('/admin/content/update/'.$content->id) }}"
                            method="post" enctype="multipart/form-data">@csrf
                            <input type="hidden" name="old_image" value="{{$content->image}}">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="title"
                                                value="{{$content->title}}" required />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="image"
                                            data-default-file="{{asset('images/content-images/'.$content->image)}}" />
                                    </div>
                                </div>

                                <a href="{{ ('/admin/content/index') }}" type="button"
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


{{-- require '../../admin_layout/footer.php'; --}}
@endsection
