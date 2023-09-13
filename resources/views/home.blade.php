<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="{{ asset('master') }}/images/favicon_1.ico">
    <title>Moltran - Responsive Admin Dashboard Template</title>

    <!-- Base Css Files -->
    <link href="{{ asset('master') }}/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="{{ asset('master') }}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('master') }}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
    <link href="{{ asset('master') }}/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- animate css -->
    <link href="{{ asset('master') }}/css/animate.css" rel="stylesheet" />
     <!-- DataTables -->
     <link href="{{ asset('master') }}/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- Waves-effect -->
    <link href="{{ asset('master') }}/css/waves-effect.css" rel="stylesheet">

    <!-- sweet alerts -->
    <link href="{{ asset('master') }}/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

    <!-- Custom Files -->
    <link href="{{ asset('master') }}/css/helper.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('master') }}/css/style.css" rel="stylesheet" type="text/css" />
    {{-- font -awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="{{ asset('master') }}/js/modernizr.min.js"></script>

</head>



<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-bars"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>
                        <form class="navbar-form pull-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control search-bar"
                                    placeholder="Type here for search...">
                            </div>
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </form>

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown hidden-xs">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="true">
                                    <i class="md md-notifications"></i> <span
                                        class="badge badge-xs badge-danger">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="text-center notifi-title">Notification</li>
                                    <li class="list-group">
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                </div>
                                                <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                </div>
                                                <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                </div>
                                                <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                        <small>There are
                                                            <span class="text-primary">2</span> new updates
                                                            available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- last list item -->
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i
                                        class="md md-crop-free"></i></a>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" class="right-bar-toggle waves-effect waves-light"><i
                                        class="md md-chat"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle profile" data-toggle="dropdown"
                                    aria-expanded="true"><img src="images/avatar-1.jpg" alt="user-img"
                                        class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div class="user-details">
                    <div class="pull-left">
                        <img src="{{ asset('master') }}/images/users/avatar-1.jpg" alt=""
                            class="thumb-md img-circle">
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">John Doe <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div
                                            class="ripple-wrapper"></div></a></li>
                                <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                            </ul>
                        </div>

                        <p class="text-muted m-0">Administrator</p>
                    </div>
                </div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.html" class="waves-effect active"><i class="md md-home"></i><span>
                                    Dashboard </span></a>
                        </li>

                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="fa fa-users"
                                    aria-hidden="true"></i><span> Employees </span><span class="pull-right"><i
                                        class="md md-add"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('add-employee') }}">Add New</a></li>
                                <li><a href="{{ route('all-employe') }}">All Employees</a></li>

                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="fa fa-users"
                                    aria-hidden="true"></i><span> Customers </span><span class="pull-right"><i
                                        class="md md-add"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('add-customer') }}">Add New</a></li>


                            </ul>
                        </li>

                        <li>
                            <a href="calendar.html" class="waves-effect"><i class="md md-event"></i><span> Calendar
                                </span></a>
                        </li>




                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->

            @yield('content')

            <footer class="footer text-right">
                2015 © Moltran.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <div class="side-bar right-bar nicescroll">
            <h4 class="text-center">Chat</h4>
            <div class="contact-list nicescroll">
                <ul class="list-group contacts-list">
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-1.jpg" alt="">
                            </div>
                            <span class="name">Chadengle</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-2.jpg" alt="">
                            </div>
                            <span class="name">Tomaslau</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-3.jpg" alt="">
                            </div>
                            <span class="name">Stillnotdavid</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-4.jpg" alt="">
                            </div>
                            <span class="name">Kurafire</span>
                            <i class="fa fa-circle online"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-5.jpg" alt="">
                            </div>
                            <span class="name">Shahedk</span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-6.jpg" alt="">
                            </div>
                            <span class="name">Adhamdannaway</span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-7.jpg" alt="">
                            </div>
                            <span class="name">Ok</span>
                            <i class="fa fa-circle away"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-8.jpg" alt="">
                            </div>
                            <span class="name">Arashasghari</span>
                            <i class="fa fa-circle offline"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-9.jpg" alt="">
                            </div>
                            <span class="name">Joshaustin</span>
                            <i class="fa fa-circle offline"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <div class="avatar">
                                <img src="images/users/avatar-10.jpg" alt="">
                            </div>
                            <span class="name">Sortino</span>
                            <i class="fa fa-circle offline"></i>
                        </a>
                        <span class="clearfix"></span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Right-bar -->

    </div>
    <!-- END wrapper -->



    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('master') }}/js/jquery.min.js"></script>
    <script src="{{ asset('master') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('master') }}/js/waves.js"></script>
    <script src="{{ asset('master') }}/js/wow.min.js"></script>
    <script src="{{ asset('master') }}/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="{{ asset('master') }}/js/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('master') }}/assets/chat/moment-2.2.1.js"></script>
    <script src="{{ asset('master') }}/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="{{ asset('master') }}/assets/jquery-detectmobile/detect.js"></script>
    <script src="{{ asset('master') }}/assets/fastclick/fastclick.js"></script>
    <script src="{{ asset('master') }}/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="{{ asset('master') }}/assets/jquery-blockui/jquery.blockUI.js"></script>

    <!-- sweet alerts -->
    <script src="{{ asset('master') }}/assets/sweet-alert/sweet-alert.min.js"></script>
    <script src="{{ asset('master') }}/assets/sweet-alert/sweet-alert.init.js"></script>

    <!-- flot Chart -->
    <script src="{{ asset('master') }}/assets/flot-chart/jquery.flot.js"></script>
    <script src="{{ asset('master') }}/assets/flot-chart/jquery.flot.time.js"></script>
    <script src="{{ asset('master') }}/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="{{ asset('master') }}/assets/flot-chart/jquery.flot.resize.js"></script>
    <script src="{{ asset('master') }}/assets/flot-chart/jquery.flot.pie.js"></script>
    <script src="{{ asset('master') }}/assets/flot-chart/jquery.flot.selection.js"></script>
    <script src="{{ asset('master') }}/assets/flot-chart/jquery.flot.stack.js"></script>
    <script src="{{ asset('master') }}/assets/flot-chart/jquery.flot.crosshair.js"></script>

    <!-- Counter-up -->
    <script src="{{ asset('master') }}/assets/counterup/waypoints.min.js" type="text/javascript"></script>
    <script src="{{ asset('master') }}/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('master') }}/js/jquery.app.js"></script>

    <!-- Dashboard -->
    <script src="{{ asset('master') }}/js/jquery.dashboard.js"></script>

    <!-- Chat -->
    <script src="{{ asset('master') }}/js/jquery.chat.js"></script>

    <!-- Todo -->
    <script src="{{ asset('master') }}/js/jquery.todo.js"></script>
    <script src="{{ asset('master') }}/assets/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('master') }}/assets/datatables/dataTables.bootstrap.js"></script>

    <script type="{{ asset('master') }}/text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

</body>

</html>



{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
