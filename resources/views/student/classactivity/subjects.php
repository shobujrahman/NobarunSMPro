<?php
require '../../student_layout/header.php';
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2></h2>
        </div>

        <!-- Widgets -->
<!-- Exportable Table -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               List of Subjects(6-10)
                            </h2>
                            <ul class="header-dropdown m-r--6">
                            <a href="../classactivity/index.php" type="button" title="Back" class="btn bg-red btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">west</i>
                                </a>
                            </ul> 
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Sl. Number</th>
                                            <th>Subject Code</th>
                                            <th>Subject Name</th>
                                            <!-- <th>Description</th> -->
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ban600987</td>
                                            <td>Bangla 1st Paper</td>
                                            <!-- <td>
                                            <a href="../content/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td> -->
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ban260048</td>
                                            <td>Bangla 2nd Paper</td>
                                            <!-- <td>
                                            <a href="../content/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td> -->
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Eng160026</td>
                                            <td>English 1st Paper</td>
                                            <!-- <td>
                                            <a href="../content/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td> -->
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Eng2600087</td>
                                            <td>English 2nd Paper</td>
                                            <!-- <td>
                                            <a href="../content/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td> -->
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Math60001</td>
                                            <td>Mathematics</td>
                                            <!-- <td>
                                            <a href="../content/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td> -->
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Scie60025</td>
                                            <td>Science</td>
                                            <!-- <td>
                                            <a href="../content/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td> -->
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>SocS60052</td>
                                            <td>Social Science</td>
                                            <!-- <td>
                                            <a href="../content/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td> -->
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>RelH/I60009</td>
                                            <td>Religion (Hinduism/Islam)</td>
                                            <!-- <td>
                                            <a href="../content/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td> -->
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Agri60010</td>
                                            <td>Agriculture</td>
                                            <!-- <td>
                                            <a href="../content/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td> -->
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        <!-- #END# Widgets -->
        <!-- CPU Usage -->
        
    </div>
</section>

<?php
require '../../student_layout/footer.php';
?>