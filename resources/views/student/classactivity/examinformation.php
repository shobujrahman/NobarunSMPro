<?php
require '../../student_layout/header.php';
?>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EXAMINATIONS INFORMATION (1st term , 2nd term & Annual exam)</h2>
            </div>
            

            <!-- Multiple Items To Be Open -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                             1st term examination information View
                            </h2>
                            <ul class="header-dropdown m-r--6">
                            <a href="../classactivity/index.php" type="button" title="Back" class="btn bg-red btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">west</i>
                                </a>
                            </ul>
                        </div>
                        <div class="body">
                            
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#admitcard" data-toggle="tab">Admit Card</a></li>
                                <li role="presentation"><a href="#examroutine" data-toggle="tab">Exam Routine</a></li>
                                <li role="presentation"><a href="#examroom" data-toggle="tab">Exam Room</a></li>
                                <li role="presentation"><a href="#examresult" data-toggle="tab">Exam Result</a></li>
                            </ul>



                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="admitcard">
                                <!-- <b>Admit Card</b> -->
                                <br>
                                <section>
                                        <div class="container" id='printMe'>
                                            <div class="admit-card">
                                                <div class="BoxA border- padding mar-bot"> 
                                                    <div class="row">
                                                        <div class="col-sm-4 txt-center">
                                                            <h5>Nabarun Bidyaniketon</h5>
                                                            <p>Muktagacha, Mymensingh 
                                                             <br> 09028-75234, 01716-923204<br> contact@nbn.edu.bd , info@nbn.edu.bd 
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-4 txt-center">
                                                            <img src="../../admin_assets/logo1.png" width="150px;" />
                                                        </div> 
                                                        <div class="col-sm-4">
                                                            <h5>Admit Card</h5>
                                                            <p>NBN - 2010</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="BoxC border- padding mar-bot">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h5>Student Id No : 1119370011</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="BoxD border- padding mar-bot">
                                                    <div class="row">
                                                        <div class="col-sm-10">
                                                            <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                <td><b>Class : 10</b></td>
                                                                <td><b>Section: </b> SCIENCE</td>
                                                                <td><b>Roll NO : 17</b></td>
                                                                </tr>
                                                                <tr>
                                                                <td><b>Student Name: </b>Nitto Nitai</td>
                                                                <td><b>Sex: </b>M</td>
                                                                </tr>
                                                                <!-- <tr>
                                                                <td><b>Father/Husband Name: </b>SS Sharma</td>
                                                                <td><b>DOB: </b>02 Jul 2019</td>
                                                                </tr> 
                                                                 <tr>
                                                                <td colspan="2" style="    height: 125px;"><b>Address: </b>moh hasnxgxums , moh hasnxgxums, moh hasnxgxums</td>
                                                                </tr> -->
                                                            </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- <div class="col-sm-2 txt-center">
                                                            <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                <th scope="row txt-center"><img src="../../admin_assets/images/user-lg.jpg" width="150px" height="165px" /></th>
                                                                </tr>
                                                            
                                                            </tbody>
                                                            </table>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                
                                                <div class="BoxF border- padding mar-bot txt-center">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S1. No.</th>
                                                                        <th>Subject Code</th>
                                                                        <th>Subject</th>
                                                                        <th>Exam Date</th>
                                                                        <th>Examiner's signature</th>
                                                                    </tr>
                                                                </thead>
                                                            <tbody>
                                                                <tr>
                                                                <td>1</td>
                                                                <td>eng101</td>
                                                                <td>English</td>
                                                                <td>5 July 2019</td>
                                                                <td>.........</td>
                                                                </tr>
                                                                <tr>
                                                                <td>2</td>
                                                                <td>eng101</td>
                                                                <td>English</td>
                                                                <td>5 July 2019</td>
                                                                <td>.........</td>
                                                                </tr>
                                                                <tr>
                                                                <td>3</td>
                                                                <td>eng101</td>
                                                                <td>English</td>
                                                                <td>5 July 2019</td>
                                                                <td>.........</td>
                                                                </tr>
                                                                <tr>
                                                                <td>4</td>
                                                                <td>eng101</td>
                                                                <td>English</td>
                                                                <td>5 July 2019</td>
                                                                <td>.........</td>
                                                                </tr>
                                                                <tr>
                                                                <td>5</td>
                                                                <td>eng101</td>
                                                                <td>English</td>
                                                                <td>5 July 2019</td>
                                                                <td>.........</td>
                                                                </tr>
                                                                <tr>
                                                                <td>6</td>
                                                                <td>eng101</td>
                                                                <td>English</td>
                                                                <td>5 July 2019</td>
                                                                <td>.........</td>
                                                                </tr>
                                                                <tr>
                                                                <td>7</td>
                                                                <td>eng101</td>
                                                                <td>English</td>
                                                                <td>5 July 2019</td>
                                                                <td>.........</td>
                                                                </tr>
                                                                
                                                            </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <footer class="txt-center">
                                                <br>
                                                    <p>_______________________________</p>
                                                    <p>*** Head of the Institution ***</p>
                                                </footer>
                                                
                                            </div>
                                        </div>

                                        <button type="download" onclick="printDiv('printMe')" class="btn btn-info waves-effect">Print</button>
	
                            </section>
                                </div>


                                <div role="tabpanel" class="tab-pane fade" id="examroutine">
                                    <b>Exam Routine</b>
                                    <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Sl. Number</th>
                                            <th>Date</th>
                                            <th>Subject Code</th>
                                            <th>Subject Name</th>
                                            <th>Start Time</th>
                                            <th>Room No.</th>
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
                                            <td>01/09/2010</td>
                                            <td>Ban600987</td>
                                            <td>Bangla 1st Paper</td>
                                            <td>10.00 am</td>
                                            <td>707</td>
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
                                            <td>02/09/2010</td>
                                            <td>Ban600987</td>
                                            <td>Bangla 1st Paper</td>
                                            <td>10.30 am</td>
                                            <td>708</td>
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
                                            <td>03/09/2010</td>
                                            <td>Ban600987</td>
                                            <td>Bangla 1st Paper</td>
                                            <td>03.00 am</td>
                                            <td>703</td>
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
                                            <td>04/09/2010</td>
                                            <td>Ban600987</td>
                                            <td>Bangla 1st Paper</td>
                                            <td>04.00 am</td>
                                            <td>704</td>
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
                                            <td>01/09/2010</td>
                                            <td>Ban600987</td>
                                            <td>Bangla 1st Paper</td>
                                            <td>10.00 am</td>
                                            <td>707</td>
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
                                            <td>01/09/2010</td>
                                            <td>Ban600987</td>
                                            <td>Bangla 1st Paper</td>
                                            <td>10.00 am</td>
                                            <td>707</td>
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
                                            <td>01/09/2010</td>
                                            <td>Ban600987</td>
                                            <td>Bangla 1st Paper</td>
                                            <td>10.00 am</td>
                                            <td>707</td>
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

                                
                                <div role="tabpanel" class="tab-pane fade" id="examroom">
                                    <b>Exam Room</b>
                                    <p>
                                    <div class="BoxF border- padding mar-bot txt-center">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S1. No.</th>
                                                                        <th>Subject Code</th>
                                                                        <th>Subject</th>
                                                                        <th>Exam Date</th>
                                                                        <th>Exam Paper</th>
                                                                    </tr>
                                                                </thead>
                                                            <tbody>
                                                                <tr>
                                                                <td>1</td>
                                                                <td>eng101</td>
                                                                <td>English</td>
                                                                <td>5 July 2019</td>
                                                                <td>
                                                                <a href="examquestion.php" type="button" title="Question" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">quiz</i>
                                            </a>
                                            <!-- <a href="javascript:void(0)" type="button" title="Delete" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete_forever</i>
                                            </a> -->
                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                <td>2</td>
                                                                <td>eng101</td>
                                                                <td>English</td>
                                                                <td>5 July 2019</td>
                                                                <td>
                                                                <a href="#" type="button" title="Question" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">quiz</i>
                                            </a>
                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                <td>3</td>
                                                                <td>eng101</td>
                                                                <td>English</td>
                                                                <td>5 July 2019</td>
                                                                <td>
                                                                <a href="#" type="button" title="Question" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">quiz</i>
                                            </a>
                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                <td>4</td>
                                                                <td>eng101</td>
                                                                <td>English</td>
                                                                <td>5 July 2019</td>
                                                                <td>
                                                                <a href="#" type="button" title="Question" class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">quiz</i>
                                            </a>
                                                                </td>
                                                                </tr>
                                                                
                                                            </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="examresult">
                                    <b>Settings Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multiple Items To Be Open -->


        </div>
    </section>


    <script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
	</script>

<?php
require '../../student_layout/footer.php';
?>