<!--/**-->
<!--* Created by atom.-->
<!--* User: RPJ-->
<!--* Date: 1/21/2021-->
<!--* Time: 03:13 PM-->
<!--*/-->

@php
$menuItems = \App\Models\ContentManagement::get();
$notices = \App\Models\Utile::latest()->take(3)->pluck('title')->implode(' | ');
@endphp
<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="user_assets/images/logo1.png" alt="ko"></a>

        </div>
        <div class="navbar-header" style="text-align: center;">
            <h1 style="margin-top: -7px; font-size: 70px; color: #C90204; padding-left: 150px;">
                Nabarun Bidyaniketon
            </h1>
            <h2 style=" margin-top: auto; margin-bottom: 40px; color: #5f0808; padding-left: 150px;">
                Muktagachha, Mymensingh
            </h2>
            <h3 style="margin-top: -32px; margin-bottom: 40px; padding-left: 150px; font-size: large;">
                <span style="color: #044211;">Since: </span>
                <span style="color: #001bdb">1968</span>
            </h3>
        </div>

        <div class="navbar-header" style="text-align: center;">
            <h3 style="margin-top: -32px; margin-bottom: 40px; padding-left: 460px; font-size: medium;">
                <span style="color: #044211;">EIIN: </span>
                <span style="color: #001bdb">111937</span>
                <span style="color: #fc3400"> ; </span>
                <span style="color: #044211;">School Code: </span>
                <span style="color: #001bdb">7578</span>
            </h3>
            <h3 style="margin-top: -32px; margin-bottom: 40px; padding-left: 460px; font-size: medium;">
                <span style="color: #044211;">E-mail: </span><span
                    style="color: #001bdb">nabarunbidyaniketon@gmail.com</span>
            </h3>

            <hr style="margin-right: -443px; border-color: #5f0808;">

        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li><a href="{{('/')}}">{{$menuItems[0]['title']}}</a></li>
                <li><a href="{{url('about')}} ">{{$menuItems[1]['title']}}</a></li>
                <li><a href="{{('administrative')}}">{{$menuItems[2]['title']}}</a></li>
                <li><a href="{{('academic')}}">{{$menuItems[3]['title']}}</a></li>
                <li><a href="{{('opportunity')}}">{{$menuItems[4]['title']}}</a></li>
                <li><a href="{{('admission')}}">{{$menuItems[5]['title']}}</a></li>
                <li><a href="{{('function')}}">{{$menuItems[6]['title']}}</a></li>
                <li><a href="{{('gallery')}}">{{$menuItems[7]['title']}}</a></li>
                <li><a href="{{('notice')}}">{{$menuItems[8]['title']}}</a></li>
                <li><a href="{{('importantlink')}}">{{$menuItems[9]['title']}}</a></li>
                <li><a href="{{('contact')}}">{{$menuItems[10]['title']}}</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Access</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{('/admin/login')}}">Admin Access</a></li>
                        <li><a href="{{('/teacher/login')}}">Teacher Access</a></li>
                        <li><a href="{{('/student/login')}}">Student Access</a></li>

                    </ul>
                </li>


            </ul>

        </div>
        <div class="row">
            <header class="secondary">
                <div class="container">
                    <marquee style="background-color: #027a7a;">
                        <h4 style="color: #fff;">Notices: # <a style="color: #fff;"
                                href="{{('notice')}}">*{{$notices}}</a></h4>
                    </marquee>
                </div>
            </header>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->