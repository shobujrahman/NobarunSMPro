<?php
require '../../admin_layout/header.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                MEMBER MANAGEMENT
                </h2>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Index View (Committee/Governing Body/Heads of Institutions Received/Teacher Stuff)
                            </h2>
                            <ul class="header-dropdown m-r--6">
                            <a href="../member/add.php" type="button" title="Add New" class="btn bg-green btn-circle-lg waves-effect waves-circle waves-float">
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
                                            <th>Designation</th>
                                            <th>Image</th>
                                            <th>Action</th>
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
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>

                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Yuri Berry</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Pre-Sales Support</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Sales Assistant</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Developer</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Regional Director</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Software Engineer</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Regional Marketing</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Integration Specialist</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Developer</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Technical Author</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Team Leader</td>
                                            <td>Development Lead</td>

                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Post-Sales support</td>
                                            <td>Development Lead</td>
                                             
                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>Marketing Designer</td>
                                            <td>Development Lead</td>
                                             
                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>Office Manager</td>
                                            <td>Development Lead</td>
                                             
                                            <td>
                                            <img class="media-object" src="../../admin_assets/images/user.jpg" width="50" height="50">
                                            </td>
                                            
                                            <td>
                                            <a href="../member/edit.php" type="button" title="Edit" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a>
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
    