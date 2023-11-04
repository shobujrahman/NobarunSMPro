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

$headmaster = \App\Models\MemberDetails::where('designation', 'Headmaster')->first();
@endphp
<!-- Sidebar -->
<aside class="sidebar sidebar-right">

    <div class="row panel">

        <div class="col-xs-12">
            <h3>School {{$headmaster->designation}}</h3>
            <p>
                <img src="{{asset('images/member-images/'. $headmaster->image)}}" alt="">
            </p>
            <p>
                {!! $headmaster->description !!}
            </p>

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
