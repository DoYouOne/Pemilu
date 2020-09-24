<!DOCTYPE html>
{{-- <!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> --}}
<html lang="en">
    {{-- <!--<![endif]-->
    <!-- BEGIN HEAD --> --}}

    <head>
        <meta charset="utf-8" />
        <title>e-Vote</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page of Theme #3 for "
            name="description" />
        <meta content="" name="author" />
        {{-- <!-- BEGIN GLOBAL MANDATORY STYLES --> --}}
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset ('user/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset ('user/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset ('user/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset ('user/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{URL::asset ('user/assets/global/css/components-rounded.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{URL::asset ('user/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{URL::asset ('user/assets/layouts/layout3/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset ('user/assets/layouts/layout3/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{URL::asset ('user/assets/layouts/layout3/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="checklist.png" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid">
        @include('sweetalert::alert')
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                <div class="page-logo">
                                    <a href="index.html">
                                        <img src="logo.png" alt="logo" class="logo-default" style="width:120px;">
                                    </a>
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">
                                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                                        <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                                        {{-- <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class  --}}
                                        <li class="droddown dropdown-separator">
                                            <span class="separator"></span>
                                        </li>
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            @if(Auth::check() == null)
                                                <a href="{{ url('/login') }}" class="dropdown-toggle">
                                                    <img alt="" class="img-circle" src="annonym.png">
                                                    <span class="username username-hide-mobile">Login Now!</span>
                                                </a>
                                            @else
                                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <img alt="" class="img-circle" src="useer.png">
                                                    <span class="username username-hide-mobile">{{ Auth::user()->email }}</span>
                                                </a>
                                            @endif
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="{{ url('profile') }}">
                                                        <i class="icon-user"></i> My Profile </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/logout') }}">
                                                        <i class="icon-key"></i> Log Out </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END USER LOGIN DROPDOWN -->
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                                <!-- BEGIN HEADER SEARCH BOX -->
                                <form class="search-form" action="page_general_search.html" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="query">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            @if (Auth::check() != null)
                                                @if (Auth::user()->status == '0')
                                                    <a href="{{ url('/dashboard') }}">
                                                        <i class="icon-home"></i> Dashboard
                                                    </a>
                                                @elseif (Auth::user()->status == '1' || '2')
                                                    <a href="{{ url('/') }}">
                                                        <i class="icon-home"></i> Dashboard
                                                    </a>
                                                @endif
                                            @else
                                                <a href="{{ url('/') }}">
                                                    <i class="icon-home"></i> Dashboard
                                                </a>
                                            @endif
                                        </li>
                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a href="{{ url('/vote') }}">
                                                <i class="icon-pencil"></i> Vote
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a href="{{ url('/about') }}">
                                                <i class="icon-heart"></i> About
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            @yield('content')
                        </div>
                        {{-- <!-- END CONTENT --> --}}
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
            <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                    <!-- BEGIN FOOTER -->
                    <!-- BEGIN PRE-FOOTER -->
                    <div class="page-prefooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>About</h2>
                                    <p> HATI S-1 ITN Malang atau bisa disebut Himpunan Mahasiswa Teknik Informatika S-1 ITN Malang sebuah organisasi yang berdiri pada tanggal 17 September 2008. </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                    <h2>Subscribe Email</h2>
                                    <div class="subscribe-form">
                                        <form action="javascript:;">
                                            <div class="input-group">
                                                <input type="text" placeholder="mail@email.com" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn" type="submit">Submit</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Follow Us On</h2>
                                    <ul class="social-icons">
                                        {{-- <li>
                                            <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                        </li> --}}
                                        <li>
                                            <a href="http://www.facebook.com/hati.itnmalang.7" data-original-title="facebook" class="facebook"></a>
                                        </li>
                                        {{-- <li>
                                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                        </li> --}}
                                        {{-- <li>
                                            <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                        </li> --}}
                                        <li>
                                            <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/hati_itn_malang/" data-original-title="instagram" class="instagram"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Contacts HUMAS</h2>
                                    <address class="margin-bottom-40"> Phone 1: +62 878-6351-4670
                                        <br> Phone 2: +62 857-5541-7453
                                        <br> Email:
                                        <a href="mailto:hati@scholar.itn.ac.id">hati@scholar.itn.ac.id</a>
                                        <a href="mailto:hatitnmalang18@gmail.com">hatitnmalang18@gmail.com</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRE-FOOTER -->
                    <!-- BEGIN INNER FOOTER -->
                    <div class="page-footer">
                        <div class="container"> 2020 &copy; HATI S1 &nbsp;|&nbsp;
                            DoYouOne
                        </div>
                    </div>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                    <!-- END INNER FOOTER -->
                    <!-- END FOOTER -->
                </div>
            </div>
        </div>
        <!--[if lt IE 9]>
<script src="{{URL::asset ('user/assets/global/plugins/respond.min.js')}}"></script>
<script src="{{URL::asset ('user/assets/global/plugins/excanvas.min.js')}}"></script>
<script src="{{URL::asset ('user/assets/global/plugins/ie8.fix.min.js')}}"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{URL::asset ('user/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset ('user/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset ('user/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset ('user/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset ('user/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset ('user/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{URL::asset ('user/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{URL::asset ('user/assets/layouts/layout3/scripts/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset ('user/assets/layouts/layout3/scripts/demo.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset ('user/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset ('user/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
