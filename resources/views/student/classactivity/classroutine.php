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
                            Class Routine(6-10)
                            </h2>
                            <ul class="header-dropdown m-r--6">
                            <a href="../classactivity/index.php" type="button" title="Back" class="btn bg-red btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">west</i>
                                </a>
                            </ul> 
                        </div>
                        <div class="body" >
                            <div class="row clearfix" id='printMe'>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="body bg-green">
                        
    <table border="5" cellspacing="0" align="center">
        <!--<caption>Timetable</caption>-->
        <tr>
            <td align="center" height="50" 
                width="100"><br>
                <b>Day/Period</b></br>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>I<br>9:30-10:20</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>II<br>10:20-11:10</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>III<br>11:10-12:00</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>12:00-12:40</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>IV<br>12:40-1:30</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>V<br>1:30-2:20</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>VI<br>2:20-3:10</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>VII<br>3:10-4:00</b>
            </td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Monday</b></td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Mat</td>
            <td align="center" height="50">Che</td>
            <td rowspan="6" align="center" height="50">
                <h2>L<br>U<br>N<br>C<br>H</h2>
            </td>
            <td colspan="3" align="center" 
                height="50">LAB</td>
            <td align="center" height="50">Phy</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Tuesday</b>
            </td>
            <td colspan="3" align="center" 
                height="50">LAB
            </td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Che</td>
            <td align="center" height="50">Mat</td>
            <td align="center" height="50">SPORTS</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Wednesday</b>
            </td>
            <td align="center" height="50">Mat</td>
            <td align="center" height="50">phy</td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Che</td>
            <td colspan="3" align="center" 
                height="50">LIBRARY
            </td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Thursday</b>
            </td>
            <td align="center" height="50">Phy</td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Che</td>
            <td colspan="3" align="center" 
                height="50">LAB
            </td>
            <td align="center" height="50">Mat</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Friday</b>
            </td>
            <td colspan="3" align="center" 
                height="50">LAB
            </td>
            <td align="center" height="50">Mat</td>
            <td align="center" height="50">Che</td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Phy</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Saturday</b>
            </td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Che</td>
            <td align="center" height="50">Mat</td>
            <td colspan="3" align="center" 
                height="50">SEMINAR
            </td>
            <td align="center" height="50">SPORTS</td>
        </tr>
    </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                </div>
                            </div>
                            <button type="download" onclick="printDiv('printMe')" class="btn btn-info waves-effect">Print</button>
                            
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