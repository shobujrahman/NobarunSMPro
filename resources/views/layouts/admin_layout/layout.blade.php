<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="NBN High School-Online Education">
    <meta name="author" content="RTS">
    <title>Nabarun Bidyaniketon</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ url('admin_assets/logo1.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ url('admin_assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ url('admin_assets/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ url('admin_assets/plugins/animate-css/animate.css') }}" rel="stylesheet" />


    <!-- Bootstrap Material Datetime Picker Css -->
    <link
        href="{{ url('admin_assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="{{ url('admin_assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{ url('admin_assets/plugins/waitme/waitMe.css') }}" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="{{ url('admin_assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}"
        rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="{{ url('admin_assets/plugins/dropzone/dropzone.css') }}" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="{{ url('admin_assets/plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="{{ url('admin_assets/plugins/jquery-spinner/css/bootstrap-spinner.css') }}" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="{{ url('admin_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{ url('admin_assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ url('admin_assets/plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{ url('admin_assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}"
        rel="stylesheet">

    <!-- noUISlider Css -->
    <link href="{{ url('admin_assets/plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ url('admin_assets/css/style.css') }}" rel="stylesheet">


    <!-- Ckeditor -->
    <script src="{{ url('admin_assets/js/ckeditor/ckeditor.js') }}"></script>

    <!-- You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ url('admin_assets/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-cyan">
    <div class="wrapper">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>

                    <a class="navbar-brand" href="{{('/admin/dashboard')}}">ADMIN - Nabarun Bidyaniketon</a>
                </div>

            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="../../admin_assets/logo1.png" width="50" height="50" alt="logo" />
                        <img src="../../admin_assets/user10.jpeg" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Revert
                            Technology</div>
                        <div class="email">administrator@gmail.com</div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{ ('/admin/profile') }}"><i class="material-icons">person</i>Profile</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ ('/admin/editprofile') }}"><i class="material-icons">edit</i>Edit
                                        Profile</a></li>
                                <!-- <li><a href="../profile/index.php"><i class="material-icons">track_changes</i>Change Password</a></li> -->
                                <!-- <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li> -->
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ ('/admin/admin-logout') }}"><i class="material-icons">input</i>Sign
                                        Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <!-- <li class="header">MAIN NAVIGATION</li> -->

                        <!-- Dashboard -->
                        <li class="">
                            <a href="{{ ('/admin/dashboard') }}">
                                <i class="material-icons">home</i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <!-- Content Management -->
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">widgets</i>
                                <span>Content Management</span>
                            </a>
                            <ul class="ml-menu">


                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <i class="material-icons">content_copy</i>
                                        <span>Content</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li><a href="{{ ('/admin/content/index') }}">Content Setup</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <i class="material-icons">ballot</i>
                                        <span>Utile</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li><a href="{{ ('/admin/notice/index') }}">Notice</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <i class="material-icons">group</i>
                                        <span>Member</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li><a href="{{ ('/admin/member/index') }}">Member Setup</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <i class="material-icons">wallpaper</i>
                                        <span>Gallery</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li><a href="{{ ('/admin/gallery/index') }}">Gallery Setup</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <i class="material-icons">school</i>
                                        <span>Academic</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li><a href="{{ ('/admin/academic/userviewindex') }}">user view Setup</a></li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ ('/admin/communication/index') }}">
                                        <i class="material-icons">contact_mail</i>
                                        <span>Communication</span>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <!-- Access Management -->
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">manage_accounts</i>
                                <span>Access Management</span>
                            </a>
                            <ul class="ml-menu">


                                <li>
                                    <a href="../teacheraccess/index.php">
                                        <i class="material-icons">accessible</i>
                                        <span>Teacher Access</span>
                                    </a>

                                </li>

                                <li>
                                    <a href="../studentaccess/index.php">
                                        <i class="material-icons">accessibility</i>
                                        <span>Student Access</span>
                                    </a>

                                </li>



                            </ul>
                        </li>

                        <!-- File Management -->
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">file_open</i>
                                <span>File Management</span>
                            </a>
                            <ul class="ml-menu">


                                <li>
                                    <a href="../teacheraccess/index.php">
                                        <i class="material-icons">bolt</i>
                                        <span>Results Management</span>
                                    </a>

                                </li>

                                <li>
                                    <a href="../studentaccess/index.php">
                                        <i class="material-icons">token</i>
                                        <span>Admission Management</span>
                                    </a>

                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2021 <a href="javascript:void(0);">Nabarun Bidyaniketon</a>.
                    </div>
                    <div class="version">
                        <b><a href="javascript:void(0);">Revert Technology</a> </b>
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->

            <!-- #END# Right Sidebar -->
        </section>

        @yield('content')
    </div>
    <!-- Jquery Core Js -->
    <script src="{{ url('admin_assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ url('admin_assets/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ url('admin_assets/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ url('admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="{{ url('admin_assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>

    <!-- Dropzone Plugin Js -->
    <script src="{{ url('admin_assets/plugins/dropzone/dropzone.js') }}"></script>

    <!-- Input Mask Plugin Js -->
    <script src="{{ url('admin_assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

    <!-- Multi Select Plugin Js -->
    <script src="{{ url('admin_assets/plugins/multi-select/js/jquery.multi-select.js') }}"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="{{ url('admin_assets/plugins/jquery-spinner/js/jquery.spinner.js') }}"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{ url('admin_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <!-- noUISlider Plugin Js -->
    <script src="{{ url('admin_assets/plugins/nouislider/nouislider.js') }}"></script>


    <!-- Waves Effect Plugin Js -->
    <script src="{{ url('admin_assets/plugins/node-waves/waves.js') }}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{ url('admin_assets/plugins/autosize/autosize.js') }}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ url('admin_assets/plugins/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script
        src="{{ url('admin_assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
    </script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{ url('admin_assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

    <!-- Ckeditor -->
    <script src="{{ url('admin_assets/plugins/ckeditor/ckeditor.js') }}"></script>

    <!-- TinyMCE -->
    <script src="{{ url('admin_assets/plugins/tinymce/tinymce.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ url('admin_assets/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ url('admin_assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ url('admin_assets/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ url('admin_assets/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ url('admin_assets/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ url('admin_assets/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}">
    </script>
    <script src="{{ url('admin_assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>


    <!-- Custom Js -->
    <script src="{{ url('admin_assets/js/admin.js') }}"></script>
    <script src="{{ url('admin_assets/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ url('admin_assets/js/pages/forms/editors.js') }}"></script>
    <script src="{{ url('admin_assets/js/pages/forms/basic-form-elements.js') }}"></script>
    <script src="{{ url('admin_assets/js/pages/forms/advanced-form-elements.js') }}"></script>
    <script src="{{ url('admin_assets/js/pages/index.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ url('admin_assets/js/demo.js') }}"></script>
</body>

</html>
