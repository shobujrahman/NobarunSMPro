<!--/**-->
<!--* Created by atom.-->
<!--* User: RPJ-->
<!--* Date: 2/22/2021-->
<!--* Time: 03:13 PM-->
<!--*/-->


@php
$academicUserView = \App\Models\AcademicUserView::get();
$totalStudent = $academicUserView->sum('total_student');
$totalMaleStudent = $academicUserView->sum('male_student');
$totalFemaleStudent = $academicUserView->sum('female_student');
@endphp
<!-- Sidebar -->
<aside class="sidebar sidebar-right">

    <div class="row panel">

        <div class="col-xs-12">
            <h3>School Headmaster</h3>
            <p>
                <img src="user_assets/images/photo-4.jpg" alt="">
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras scelerisque cursus erat vitae interdum. Nam
                vehicula, felis eu semper tincidunt, mauris risus ultricies dolor, a tristique arcu libero sit amet
                felis. Donec venenatis sed velit eget dignissim.Morbi vitae diam felis. Mauris vulputate nisi erat,
                adipiscing pretium lacus lacinia quis. Sed consectetur ipsum.</p>

        </div>
    </div>


    <div class="row panel">

        <div class="col-xs-12">
            <div class="heading">
                <!-- Heading -->
                <h3>Student Coutn</h3>
                <br />
            </div>
            <div class="row flat">
                <div class="col-lg-12 col-md-12 col-xs-6">
                    <ul class="plan plan1 featured">

                        <li>
                            <h4>Total Student</h4>
                            <strong>{{$totalStudent}}</strong>
                        </li>
                        <li>
                            <h4>Total Male Student</h4>
                            <strong>{{$totalMaleStudent}}</strong>
                        </li>
                        <li>
                            <h4>Total female Student</h4>
                            <strong>{{$totalFemaleStudent}}</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

</aside>
<!-- /Sidebar -->
