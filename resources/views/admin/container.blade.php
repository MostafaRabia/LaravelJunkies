<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <title>Maktabti</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- CSS -->
    <link href="{{asset('public/admin/css/bootstrap.min.css')}}" rel=" stylesheet" type="text/css">
    <link href="{{asset('public/admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/admin/css/main.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/admin/css/my-custom-styles.css')}}" rel="stylesheet" type="text/css">
    <!--[if lte IE 9]>
    <link href="{{asset('admin/css/main-ie.css" rel="stylesheet')}}" type="text/css"/>
    <link href="{{asset('admin/css/main-ie-part2.css')}}" rel="stylesheet" type="text/css"/>
    <![endif]-->
</head>

<body class="sidebar-fixed topnav-fixed " style="height:3000px;">
<!-- WRAPPER -->
<div id="wrapper" class="wrapper">

    <!-- LEFT SIDEBAR -->
    <nav class="top-bar navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a href="#" class="pull-left toggle-sidebar-collapse"><i class="fa fa-bars"></i></a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Maktabti') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div id="left-sidebar" class="left-sidebar ">
        <!-- main-nav -->
        <div class="sidebar-scroll">
            <nav class="main-nav">
                <ul class="main-menu">

                    <li class="active"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-dashboard fa-fw"></i>
                            <span class="text">Dashboard</span></a>
                    </li>

                    <li class="active"><a href="books-list" class="js-sub-menu-toggle"><i
                                    class="fa fa-navicon"></i><span
                                    class="text">Categories </span>
                            <i class="toggle-icon fa fa-angle-down"></i></a>
                        <ul class="sub-menu open">
                            <li class="active"><a href="categories-list"><span class="text">Categories list</span></a>
                            </li>
                            <li class=" "><a href="add-cat"><span class="text">Add Category</span></a></li>
                            <li class=" "><a href="edit-cat"><span class="text">Edit Category</span></a></li>
                        </ul>
                    </li>

                    <li class=""><a href="books-list" class="js-sub-menu-toggle"><i class="fa fa-navicon"></i><span
                                    class="text">Products </span>
                            <i class="toggle-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                            <li class=" "><a href="products-list"><span class="text">Products list</span></a></li>
                            <li class=" "><a href="add-product"><span class="text">Add Products</span></a></li>
                            <li class=" "><a href="edit-product"><span class="text">Edit Products</span></a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /main-nav -->
        </div>
    </div>

    @yield("content")


</div>
<!-- END WRAPPER -->

<!-- Javascript -->
<script src="{{asset('public/admin/js/jquery/jquery-2.1.0.min.js')}}"></script>
<script src="{{asset('public/admin/js/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/modernizr/modernizr.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/bootstrap-tour/bootstrap-tour.custom.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('public/admin/js/king-common.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/stat/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/raphael/raphael-2.1.0.min.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/stat/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/stat/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/stat/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/stat/flot/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/stat/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/datatable/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/jquery-mapael/jquery.mapael.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/raphael/maps/usa_states.js')}}"></script>
<script src="{{asset('public/admin/js/king-chart-stat.js')}}"></script>
<script src="{{asset('public/admin/js/king-table.js')}}"></script>
<script src="{{asset('public/admin/js/king-components.js')}}"></script>
<script src="{{asset('public/admin/js/king-components.js')}}"></script>
<script src="{{asset('public/admin/js/plugins/dropzone/dropzone.min.js')}}"></script>
<script src="{{asset('public/admin/js/king-elements.js')}}"></script>
<script src="{{asset('public/admin/js/style.js')}}"></script>

</body>

</html>