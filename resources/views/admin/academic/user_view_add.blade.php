{{-- require '../../admin_layout/header.php'; --}}
@extends('layouts.admin_layout.layout')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Academic MANAGEMENT</h2>
        </div>

        <!-- CKEditor -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Add View</h2>
                    </div>

                    <div class="body">
                        <form action="{{url('/admin/academic/userviewstore')}}" id="frmFileUpload" class=""
                            method="post" enctype="multipart/form-data">@csrf
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="name">Academic Name</label>
                                            <input name="academic_name" type="text" class="form-control"
                                                placeholder="class 6" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="section">Total Section</label>
                                            <input name="section" type="text" class="form-control" placeholder="3" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="routine">Routine</label>
                                            <input name="routine" type="text" class="form-control" placeholder="3" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="textbook">Text Book</label>
                                            <input name="text_book" type="text" class="form-control" placeholder="15" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="tstudent">Total Student</label>
                                            <input name="total_student" type="text" class="form-control"
                                                placeholder="300" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="mstudent">Male Student</label>
                                            <input name="male_student" type="text" class="form-control"
                                                placeholder="230" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="festudent">Female Student</label>
                                            <input name="female_student" type="text" class="form-control"
                                                placeholder="70" />
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <a href="{{ ('/admin/academic/userviewindex') }}" type="button"
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
