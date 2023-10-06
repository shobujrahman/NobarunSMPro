
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
                        <form action="/" id="frmFileUpload" class="" method="post" enctype="multipart/form-data">
                        <div class="row clearfix">
                        <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label for="name">Name</label>
                                            <input type="text" class="form-control" value="Name" />
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <div class="form-group">
                                    <div class="form-line">
                                    <label >Designation</label>
                                    <input type="text" class="form-control" value="Designation" />
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                    <div class="form-line">
                                    <label >Address</label>
                                    <input type="text" class="form-control" placeholder="Collage Road" value="Collage Road"/>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                    <div class="form-line">
                                    <label >Contact</label>
                                    <input type="number" class="form-control" placeholder="0174.**.0*" value="0174.**.0*"/>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                    <div class="form-line">
                                    <label >E-mail</label>
                                    <input type="email" class="form-control" placeholder="member@gmail.com" value="member@gmail.com"/>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                                <label for="InputDescription" class="col-sm-2 control-label">Description</label>

                                                <div class="col-sm-12">
                                                    <div class="form-line">
                                                    <textarea class="ckeditor" name="InputDescription">
                                    <h2>WYSIWYG Editor</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                                <h3>Lacinia</h3>
                                <ul>
                                    <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                                    <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                                    <li>Praesent non lacinia mi.</li>
                                    <li>Mauris a ante neque.</li>
                                    <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                                </ul>
                                <h3>Pellentesque adipiscing</h3>
                                <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                                    </textarea>
                                                    </div>
                                                </div>
                                            </div>

                                <a href="{{ ('/admin/member/details_index') }}" type="button" class="btn btn-danger waves-effect">Back</a>
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
