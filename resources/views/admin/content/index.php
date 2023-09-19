<?php
require '../../admin_layout/header.php';
?>

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
                                Index View (About/Administrative/Academic/Admission/Opportunity/Function)
                            </h2>
                            <ul class="header-dropdown m-r--6">
                            <a href="../content/add.php" type="button" title="Add New" class="btn bg-green btn-circle-lg waves-effect waves-circle waves-float">
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
                                        <tr>
                                            <td>1</td>
                                            <td>About</td>
                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/image-gallery/1.jpg" width="50" height="50">
                                            </td>
                                            <td>
                                            <a href="../content/details_index.php" type="button" title="Add" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">add</i>
                                            </a>
                                            </td>
                                            <td>
                                            <a href="../content/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <!-- <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Administrative</td>
                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/image-gallery/1.jpg" width="50" height="50">
                                            </td>
                                            <td>
                                            <a href="../content/details_index.php" type="button" title="Add" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">add</i>
                                            </a>
                                            </td>
                                            <td>
                                            <a href="../content/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <!-- <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a> -->
                                            </td>
                                        </tr>
                                        
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


<?php
require '../../admin_layout/footer.php';
?>
    