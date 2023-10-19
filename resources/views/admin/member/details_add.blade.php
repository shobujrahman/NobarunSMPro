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
                        <h2>Add Details View</h2>
                    </div>

                    <div class="body">
                        <form action="{{url('/admin/member/details_store/'.$member_type->id)}}" id="frmFileUpload"
                            class="" method="post" enctype="multipart/form-data">@csrf
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="name">Name</label>
                                            <input name="name" type="text" class="form-control" placeholder="Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Designation</label>
                                            <input name="designation" type="text" class="form-control"
                                                placeholder="Designation" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Address</label>
                                            <input name="address" type="text" class="form-control"
                                                placeholder="Collage Road" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Contact</label>
                                            <input name="contact" type="number" class="form-control"
                                                placeholder="0174.**.0*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>E-mail</label>
                                            <input name="email" type="email" class="form-control"
                                                placeholder="member@gmail.com" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input name="image" type="file" class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <label for="InputDescription" class="col-sm-2 control-label">Description</label>

                                    <div class="col-sm-12">
                                        <div class="form-line">
                                            <textarea name="description" class="ckeditor" name="InputDescription">

                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ ('/admin/member/details_index') }}" type="button"
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

{{-- require '../../admin_layout/footer.php'; --}}
