<!doctype html>
<html lang="en">

<head>
    <title>Dashboard | CargBatam</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/chartist/css/chartist-custom.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/assets/img/favicon.png') }}">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html"><img src="{{ asset('admin/assets/img/test.png') }}" width="35px"
                        class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i
                            class="lnr lnr-arrow-left-circle"></i></button>
                </div>


                <form class="navbar-form navbar-left" method="get" action="/pengiriman">
                    <div class="input-group">

                        <input type="text" name="cari" value="" class="form-control"
                            placeholder="Search dashboard...">
                        <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>

                    </div>

                </form>

                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="lnr lnr-alarm"></i>
                                {{-- <span class="badge bg-danger">5</span> --}}
                            </a>
                            {{-- <ul class="dropdown-menu notifications">
                                <li><a href="#" class="notification-item"><span
                                            class="dot bg-warning"></span>System space is almost full</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You
                                        have 9 unfinished tasks</a></li>
                                <li><a href="#" class="notification-item"><span
                                            class="dot bg-success"></span>Monthly report is available</a></li>
                                <li><a href="#" class="notification-item"><span
                                            class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your
                                        request has been approved</a></li>
                                <li><a href="#" class="more">See all notifications</a></li>
                            </ul> --}}
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                                    src="{{ asset('admin/assets/img/user.png') }}" class="img-circle" alt="Avatar">
                                dio
                                <i class="icon-submenu lnr lnr-chevron-down"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                            </ul>
                        </li>
                        <!-- <li>
       <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
      </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i>
                                <span>Dashboard</span></a></li>


                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i
                                    class="lnr lnr-file-empty"></i> <span>Master</span> <i
                                    class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="/pelanggan" class="">Customer</a></li>
                                    <li><a href="/pengirim" class="">pengirim</a></li>
                                    {{-- <li><a href="/pelanggan" class="">Barang</a></li> --}}
                                    <li><a href="/supir" class="">Kurir</a></li>
                                    <li><a href="/kendaraan" class="">kendaraan</a></li>

                                </ul>
                            </div>
                        </li>

                        <li><a href="/pengiriman" class=""><i class="lnr lnr-chart-bars"></i>
                                <span>Pengiriman</span></a></li>

                        <li><a href="/lacak_barang" class=""><i class="lnr lnr-pencil"></i>
                                <span>Blog</span></a></li>

                        <li><a href="/staff" class=""><i class="lnr lnr-user"></i>
                                <span>Staff</span></a></li>

                        <li><a href="/laporan" class=""><i class="lnr lnr-book"></i>
                                <span>Laporan</span></a></li>

                        {{-- <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a>
                        </li>
                        <li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i>
                                <span>Typography</span></a></li>
                        <li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i>
                                <span>Icons</span></a></li> --}}
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            @yield('content')
            <!-- END MAIN -->
        </div>
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">Shared by <i class="fa fa-love"></i><a
                        href="https://bootstrapthemes.co">BootstrapThemes</a>
                </p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="assets/vendor/chartist/js/chartist.min.js"></script>
    <script src="assets/scripts/klorofil-common.js"></script>
    <script>
