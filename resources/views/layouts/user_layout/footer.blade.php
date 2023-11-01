<!--/**-->
<!--* Created by atom.-->
<!--* User: RPJ-->
<!--* Date: 1/21/2021-->
<!--* Time: 03:13 PM-->
<!--*/-->
@php
$menuItems = \App\Models\ContentManagement::get();
@endphp
<footer id="footer">

    <div class="container">
        <div class="row">
            <div class="footerbottom">
                <div class="col-md-3 col-sm-6">
                    <div class="footerwidget">
                        <h4 style="color: white">Contact</h4>
                        <p style="color: white">Nabarun Bidyaniketon</p>
                        <div class="contact-info" style="color: white">
                            <i class="fa fa-map-marker"></i> Muktagacha, Mymensingh<br>
                            <i class="fa fa-phone"></i> 09028-75234 <br>
                            <i class="fa fa-mobile"></i> 01716-923204, 01309-111937 <br>
                            <i class="fa fa-envelope-o"></i> nabarunbidyaniketon@gmail.com <br>
                            <i class="fa fa-website"></i> www.nbn.edu.bd
                        </div>
                    </div><!-- end widget -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="social text-center">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-skype"></i></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">

                    <div class="panel-body">
                        <p class="simplenav" style="color: #80fff4">
                            <a href="{{('/')}}" style="color: white">{{$menuItems[0]['title']}}</a> |
                            <a href="{{('about')}}" style="color: white">{{$menuItems[1]['title']}}</a> |
                            <a href="{{('administrative')}}" style="color: white">{{$menuItems[2]['title']}}</a> |
                            <a href="{{('academic')}}" style="color: white">{{$menuItems[3]['title']}}</a> |
                            <a href="{{('opportunity')}}" style="color: white">{{$menuItems[4]['title']}}</a> |
                            <a href="{{('admission')}}" style="color: white">{{$menuItems[5]['title']}}</a> |
                            <a href="{{('function')}}" style="color: white">{{$menuItems[6]['title']}}</a> |
                            <a href="{{('gallery')}}" style="color: white">{{$menuItems[7]['title']}}</a> |
                            <a href="{{('notice')}}" style="color: white">{{$menuItems[8]['title']}}</a> |
                            <a href="{{('importantlink')}}" style="color: white">{{$menuItems[9]['title']}}</a> |
                            <a href="{{('contact')}}" style="color: white">{{$menuItems[10]['title']}}</a>
                        </p>
                    </div>

                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="social" style="color: white">
                        <p>&copy; Nabarun Bidyaniketon</p>
                        <p><a style="font-size: 14px" href="javaScript:void 0">Revert Technology.</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <!--CLEAR FLOATS-->
    </div>
</footer>



<!-- </body>
</html> -->
