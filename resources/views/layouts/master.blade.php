
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Hunfield Road</title>

    <!-- Materialize CSS  -->
    <link href="{{asset('css/materialize.css')}}" type="text/css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">

    <!-- Font Awesome Css -->
    <link href="{{asset('css/font-awesome.min.css')}}" type="text/css" rel="stylesheet">

    <!-- Slider Css -->
    <link href="{{asset('css/pgwslider.css')}}" type="text/css" rel="stylesheet">
    <link rel='stylesheet' id='camera-css'  href="{{asset('css/camera.css')}}" type='text/css' media='all'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <!-- Custom Css -->
    <link href="{{asset('css/custom.css')}}" type="text/css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
@include('partials.fb-init')
<!-- Header -->
<header >
    <!-- Header Top Display In large and Tablet Device -->
    <div class="header-top hide-on-small-only">
        <div class="container" style="width: 1000px;">
            <div class="row">
                <div class="col l4 col m5 col s12">
                    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>

                </div>
                <div class="col l4 col m3 col s12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/"><img src="{{asset('images/logo.png')}}" style="width:90%" alt="Logo"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Header top Display On Mobile -->
    <div class="header hide-on-med-and-up">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col l4 col m5 col s2">
                        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    </div>
                    <div class="col l4 col m4 col s5">
                        <!-- Dropdown -->
                        <div class="header-dropdown">
                            <!-- Dropdown Trigger -->
                            <a class='dropdown-button btn' data-beloworigin="true" href='#' data-activates='dropdown-mobile'>Today <i class="mdi-navigation-arrow-drop-down"></i></a>
                            <!-- Dropdown Structure -->
                            <ul id='dropdown-mobile' class='dropdown-content'>
                                <li><a href="javascript:void(0);">Today</a></li>
                                <li><a href="javascript:void(0);">Yesterday</a></li>
                                <li><a href="javascript:void(0);">1 Week</a></li>
                                <li><a href="javascript:void(0);">1 Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l4 col m4 col s3">
                        <!-- LogIn Link -->
                        <a href="login.html" class="login">Login</a>
                    </div>
                    <div class="col l4 col m4 col s2">
                        <!-- Search Button -->
                        <form class="searchbox">
                            <input type="text" placeholder="Type and Press Enter" name="search" class="searchbox-input" required>
                            <input type="submit" class="searchbox-submit">
                            <span class="searchbox-icon"><i class="mdi-action-search"></i></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col l4 col m4 col s12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="images/material-logo.png" alt="Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->

</header>

<!-- Sidebar Navigation -->
<ul id="slide-out" class="side-nav full">
    <li class="logo-title"><a href="javascript:void(0);">Material News</a></li>
    <!-- Dropdown Menu -->
    <li class="dropdown-menu">
        <ul class="collapsible" data-collapsible="expandable">
            <li class="">
                <div class="collapsible-header waves-effect waves active"><i class="fa fa-file"></i> Home Page <i class="fa fa-angle-right"></i></div>
                <div style="display: block;" class="collapsible-body">
                    <ul>
                        <li class="waves-effect active"><a href="index.html"><i class="fa fa-angle-right"></i> Home Page 1</a></li>
                        <li class="waves-effect"><a href="index2.html"><i class="fa fa-angle-right"></i> Home Page 2</a></li>
                        <li class="waves-effect"><a href="index3.html"><i class="fa fa-angle-right"></i> Home Page 3</a></li>
                    </ul>
                </div>
            </li>
            <li class="">
                <div class="collapsible-header waves-effect waves"><i class="fa fa-file-text"></i> News Detail<i class="fa fa-angle-right"></i></div>
                <div style="display: none;" class="collapsible-body">
                    <ul>
                        <li class="waves-effect"><a href="news-single1.html"><i class="fa fa-angle-right"></i> News Detail 1</a></li>
                        <li class="waves-effect"><a href="news-single2.html"><i class="fa fa-angle-right"></i> News Detail 2</a></li>
                        <li class="waves-effect"><a href="news-single3.html"><i class="fa fa-angle-right"></i> News Detail 3</a></li>
                    </ul>
                </div>
            </li>
            <li class="">
                <div class="collapsible-header waves-effect waves"><i class="fa fa-file-text"></i> Category <i class="fa fa-angle-right"></i></div>
                <div style="display: none;" class="collapsible-body">
                    <ul>
                        <li class="waves-effect"><a href="index-sport.html"><i class="fa fa-angle-right"></i> Sport </a></li>
                        <li class="waves-effect"><a href="index-life.html"><i class="fa fa-angle-right"></i> Life </a></li>
                        <li class="waves-effect"><a href="index-travel.html"><i class="fa fa-angle-right"></i> Travel </a></li>
                        <li class="waves-effect"><a href="index-money.html"><i class="fa fa-angle-right"></i> Money </a></li>
                        <li class="waves-effect"><a href="index-tech.html"><i class="fa fa-angle-right"></i> Tech  </a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li class="waves-effect"><a href="shop.html"><i class="fa fa-tag"></i>Shop</a></li>
    <li class="waves-effect"><a href="catalog.html"><i class="fa fa-briefcase"></i>Catalog</a></li>
    <li class="waves-effect"><a href="product-detail.html"><i class="fa fa-plus-square"></i>product Detail</a></li>
    <li class="waves-effect"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
    <li class="waves-effect"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
    <li class="waves-effect"><a href="brand1.html"><i class="fa fa-rocket"></i>Brand Style 1</a></li>
    <li class="waves-effect"><a href="brand2.html"><i class="fa fa-plane"></i>Brand Style 2</a></li>
    <li class="waves-effect"><a href="about.html"><i class="fa fa-users"></i>About</a></li>
    <li class="waves-effect"><a href="contact1.html"><i class="fa fa-phone"></i>Contact Style 1</a></li>
    <li class="waves-effect"><a href="contact2.html"><i class="fa fa-map-marker"></i>Contact Style 2</a></li>
    <li class="waves-effect"><a href="login.html"><i class="fa fa-lock"></i>Login</a></li>
</ul>

<!-- Main Wrapper -->
<div class="outside" style="width:1000px; margin:auto;">
    <div class="wrapper" >
        <div class="container">

            @yield('main-content')

        </div>
    </div>
</div>

@include('layouts.footer')