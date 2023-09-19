<?php
require '../../student_layout/header.php';
?>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
            </div>
            

            <!-- Multiple Items To Be Open -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            List of Syllabus(6-10)
                            </h2>
                            <ul class="header-dropdown m-r--6">
                            <a href="../classactivity/index.php" type="button" title="Back" class="btn bg-red btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">west</i>
                                </a>
                            </ul> 
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-teal">
                                            <div class="panel-heading" role="tab" id="headingOne_19">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19">
                                                        <i class="material-icons">topic</i> #1st term
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                                <div class="panel-body" id='printMe'>
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                    raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                    accusamus labore sustainable VHS.
                                                </div>
                                                <br>
                                                <button type="download" onclick="printDiv('printMe')" class="btn btn-info waves-effect">Print</button>
                                            </div>
                                        </div>
                                        <div class="panel panel-col-teal">
                                            <div class="panel-heading" role="tab" id="headingTwo_19">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo_19" aria-expanded="false" aria-controls="collapseTwo_19">
                                                        <i class="material-icons">topic</i> 2nd term
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_19">
                                                <div class="panel-body" id='printMe2'>
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                </div>
                                                <br>
                                                <button type="download" onclick="printDiv('printMe2')" class="btn btn-info waves-effect">Print</button>
                                                
                                            </div>
                                        </div>
                                        <div class="panel panel-col-teal">
                                            <div class="panel-heading" role="tab" id="headingThree_19">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree_19" aria-expanded="false" aria-controls="collapseThree_19">
                                                        <i class="material-icons">topic</i> Annual exam
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_19">
                                                <div class="panel-body" id='printMe3'>
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3.
                                                </div>
                                                <br>
                                                <button type="download" onclick="printDiv('printMe3')" class="btn btn-info waves-effect">Print</button>
                                                
                                            </div>
                                        </div>
                                    </div>
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