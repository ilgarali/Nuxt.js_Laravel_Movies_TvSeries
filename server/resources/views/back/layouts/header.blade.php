<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Dashboard V.2 | Kiaalap - Kiaalap Admin Template</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/dd7b1650f7.js" crossorigin="anonymous"></script>
<!-- favicon
    
============================================ -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<!-- Google Fonts
============================================ -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
<!-- Bootstrap CSS
============================================ -->
<link rel="stylesheet" href="{{asset('back/')}}/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/owl.carousel.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/owl.theme.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/owl.transitions.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/animate.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/normalize.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/meanmenu.min.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/main.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/educate-custon-icon.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/morrisjs/morris.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/metisMenu/metisMenu.min.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/metisMenu/metisMenu-vertical.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/calendar/fullcalendar.min.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/calendar/fullcalendar.print.min.css">
<link rel="stylesheet" href="{{asset('back/')}}/style.css">
<link rel="stylesheet" href="{{asset('back/')}}/css/responsive.css">
<script                 src="{{asset('back/')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Header menu area -->
<div class="left-sidebar-pro">
<nav id="sidebar" class="">
<div class="sidebar-header">
<a href="index.html"><img class="main-logo" src="{{asset('back/')}}/img/logo/logo.png" alt="" /></a>
<strong><a href="index.html"><img src="{{asset('back/')}}/img/logo/logosn.png" alt="" /></a></strong>
</div>
<div class="left-custom-menu-adp-wrap comment-scrollbar">
<nav class="sidebar-nav left-sidebar-menu-pro">
<ul class="metismenu" id="menu1">
    <li class="active">
        <a class="has-arrow" href="index.html">
                <span class="educate-icon educate-home icon-wrap"></span>
                <span class="mini-click-non">Education</span>
            </a>
        <ul class="submenu-angle" aria-expanded="true">
            <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Home</span></a></li>
        </ul>
    </li>
  
    <li>
        <a class="has-arrow" href="{{route('movie.index')}}" aria-expanded="false">
            <span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Movie Crud</span></a>
        <ul class="submenu-angle" aria-expanded="false">
        <li><a title="All Professors" href="{{route('movie.index')}}"><span class="mini-sub-pro">All Movies</span></a></li>
            <li><a title="Add Professor" href="{{route('movie.create')}}"><span class="mini-sub-pro">Add Movies</span></a></li>
            
        </ul>
    </li>
    <li>
    <a class="has-arrow" href="{{route('category.index')}}" aria-expanded="false">
            <span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Categories</span></a>
        <ul class="submenu-angle" aria-expanded="false">
            <li><a title="All Students" href="{{route('category.index')}}"><span class="mini-sub-pro">All Categories</span></a></li>
          
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="all-courses.html" aria-expanded="false">
            <span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">TV SHOWS</span></a>
        <ul class="submenu-angle" aria-expanded="false">
            <li><a title="All Courses" href="{{route('tvshow.index')}}"><span class="mini-sub-pro">All Tvshows</span></a></li>
            <li><a title="Add Courses" href="{{route('tvshow.create')}}"><span class="mini-sub-pro">Add Tvshows</span></a></li>
  
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="all-courses.html" aria-expanded="false">
            <span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Seasons</span></a>
        <ul class="submenu-angle" aria-expanded="false">
            {{-- <li><a title="All Courses" href="{{route('season.index')}}"><span class="mini-sub-pro">Seasons</span></a></li>
            <li><a title="Add Courses" href="{{route('season.create')}}"><span class="mini-sub-pro">Add Seasons</span></a></li>
   --}}
        </ul>
    </li>
  
</ul>
</nav>
</div>
</nav>
</div>
<!-- End Header menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="logo-pro">
    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
</div>
</div>
</div>
</div>
<div class="header-advance-area">
<div class="header-top-area">
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="header-top-wraper">
            <div class="row">
                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                    <div class="menu-switcher-pro">
                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                <i class="educate-icon educate-nav"></i>
                            </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                    <div class="header-top-menu tabl-d-n">
                        <ul class="nav navbar-nav mai-top-nav">
                            <li class="nav-item"><a href="#" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">About</a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Services</a>
                            </li>
                        
                        </ul>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
<div class="container">
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="mobile-menu">
            <nav id="dropdown">
                <ul class="mobile-menu-nav">
                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                        <ul class="collapse dropdown-header-top">
                            <li><a href="index.html">Dashboard v.1</a></li>
                            <li><a href="index-1.html">Dashboard v.2</a></li>
                            <li><a href="index-3.html">Dashboard v.3</a></li>
                            <li><a href="analytics.html">Analytics</a></li>
                            <li><a href="widgets.html">Widgets</a></li>
                        </ul>
                    </li>
          
                </ul>
            </nav>
        </div>
    </div>
</div>
</div>
</div>
<!-- Mobile Menu end -->
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcome-list">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="breadcome-heading">
                        <form role="search" class="sr-input-func">
                            <input type="text" placeholder="Search..." class="search-int form-control">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <ul class="breadcome-menu">
                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                        </li>
                        <li><span class="bread-blod">Dashboard V.1</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>