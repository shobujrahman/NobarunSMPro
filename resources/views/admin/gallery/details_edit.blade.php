
{{-- require '../../admin_layout/header.php'; --}}
@extends('layouts.admin_layout.layout')
@section('content')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>GALLERY MANAGEMENT</h2>
            </div>

            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit (Picture/Video)</h2>
                        </div>

                        <div class="body">
                        <form action="/" id="frmFileUpload" class="" method="post" enctype="multipart/form-data">
                        <div class="row clearfix">
                        <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="name">Name</label>
                                            <input type="text" class="form-control" value="Name" />
                                        </div>
                                    </div>
                                    </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" class="form-control" />
                                    </div>
                                </div>

                                <a href="{{ ('/admin/gallery/details_index') }}" type="button" class="btn btn-danger waves-effect">Back</a>
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
