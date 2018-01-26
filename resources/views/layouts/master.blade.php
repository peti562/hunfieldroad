
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Material News</title>

    <!-- Materialize CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" type="text/css" rel="stylesheet">

    <!-- Font Awesome Css -->
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">

    <!-- Slider Css -->
    <link href="css/pgwslider.css" type="text/css" rel="stylesheet">
    <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Header -->
<header c\>
    <!-- Header Top Display In large and Tablet Device -->
    <div class="header-top hide-on-small-only">
        <div class="container">
            <div class="row">
                <div class="col l4 col m5 col s12">
                    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>

                </div>
                <div class="col l4 col m3 col s12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/"><img src="images/material-logo.png" alt="Logo"></a>
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
    <nav role="navigation"  class="hide-on-small-only">
        <div class="nav-wrapper menu-category">
            <ul>
                <li>
                    <ul class="news-category-dropdown">
                        <li><a href="javascript:void(0);">Home Page <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li class="active"><a href="index.html">Home Page 1</a></li>
                                <li><a href="index2.html">Home Page 2</a></li>
                                <li><a href="index3.html">Home Page 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="news-category-dropdown">
                        <li><a href="javascript:void(0);">News Detail <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="news-single1.html">News Detail 1</a></li>
                                <li><a href="news-single2.html">News Detail 2</a></li>
                                <li><a href="news-single3.html">News Detail 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="news-category-dropdown">
                        <li><a href="javascript:void(0);">Category <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="index-sport.html">Sports</a></li>
                                <li><a href="index-life.html">Life</a></li>
                                <li><a href="index-travel.html">Travel</a></li>
                                <li><a href="index-money.html">Money</a></li>
                                <li><a href="index-tech.html">Tech</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="news-category-dropdown">
                        <li><a href="javascript:void(0);">pages<i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="brand1.html">Brand Style 1</a></li>
                                <li><a href="brand2.html">Brand Style 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="news-category-dropdown">
                        <li><a href="javascript:void(0);">Shop <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="shop.html">Shop Page</a></li>
                                <li><a href="catalog.html">Catalog</a></li>
                                <li><a href="product-detail.html">Product Detail</a></li>
                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li>
                    <ul class="news-category-dropdown">
                        <li><a href="javascript:void(0);">Contact <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="contact1.html">Contact Style 1</a></li>
                                <li><a href="contact2.html">Contact Style 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
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
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col l9 col m12 col s12">

                <!-- News Slider -->
                <ul class="pgwSlider">
                    <li>
                        <!-- News Slider Image -->
                        <img src="http://placehold.it/350/e91e63?text=Slider 1" alt="News Slider 1">
                        <!-- News Slider Content -->
                        <div class="news-content">
                            <div class="news-time"><small>21 Mins Ago</small></div>
                            <div class="news-title big"><h2> <a href="javascript:void(0);">Netanyachu's Likud Party Sweeps to Israel election victory</a> </h2></div>
                            <p class="news-detail">Nullam Quies ante. rhoncus augue pharetra sed. Mauris tincidunt, nunc vitae tristique porta, nisi arcu pulvinar enim, in pretium mi ex quis felis. Integer pharetra sit amet ligula sit amet porttitor. Praesent condimentum augue ut ornare tempor. </p>
                        </div>
                    </li>
                    <li>
                        <!-- News Slider Image -->
                        <img src="http://placehold.it/350/9e9d24?text=Slider 2" alt="News Slider 2">
                        <!-- News Slider Content -->
                        <div class="news-content">
                            <div class="news-time"><small>21 Mins Ago</small></div>
                            <div class="news-title big"><h2><a href="javascript:void(0);"> Party,s Over for frat after ski-resort rampage</a> </h2></div>
                            <p class="news-detail">Nullam Quies ante. rhoncus augue pharetra sed. Mauris tincidunt, nunc vitae tristique porta, nisi arcu pulvinar enim, in pretium mi ex quis felis. Integer pharetra sit amet ligula sit amet porttitor. Praesent condimentum augue ut ornare tempor. </p>
                        </div>
                    </li>
                    <li>
                        <!-- News Slider -->
                        <img src="http://placehold.it/350/689f38?text=Slider 3" alt="News Slider 3">
                        <!-- News Slider Content -->
                        <div class="news-content">
                            <div class="news-time"><small>21 Mins Ago</small></div>
                            <div class="news-title big"><h2><a href="javascript:void(0);"> Reeling Fashion Police gets Sidelined</a> </h2></div>
                            <p class="news-detail">Nullam Quies ante. rhoncus augue pharetra sed. Mauris tincidunt, nunc vitae tristique porta, nisi arcu pulvinar enim, in pretium mi ex quis felis. Integer pharetra sit amet ligula sit amet porttitor. Praesent condimentum augue ut ornare tempor. </p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col l3 col m12 col s12">
                <!-- Sidebar -->
                <div class="sidbar-box z-depth-1">
                    <div class="sidebar-title">Top Stories</div>
                    <ul>
                        <li>
                            <a href="javascript:void(0);"> 5 Things you Need To Know Wenesday</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Auti-austeriry Protest Turns Violent In Germany</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Flying Cars: The near Future, From SXSW</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">No end in Signt for California Drought</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Boehner Coup by Conservatives is Unlikely</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Market Reaction to fed rate talk: 3 scenarious</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">fed deny visas for 'Specialized' foreign workers</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l3 col m6 col s12">
                <!-- Vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!-- News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum Integer. </p></div>
                    </div>
                </div>
            </div>
            <div class="col l3 col m6 col s12">
                <!-- Vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!-- News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum</p></div>
                    </div>
                </div>
            </div>
            <div class="col l6 col m12 col s12">
                <div class="z-depth-1">
                    <!--  Horizontal News Box -->
                    <div class="news horizontal">
                        <div class="col l4 col m4 col s12 no-padding">
                            <!-- News Image -->
                            <div class="news-image">
                                <img class="responsive-img" src="http://placehold.it/350x360?text=News Image" alt="news Image">
                            </div>
                        </div>
                        <div class="col l8 col m8 col s12 no-padding">
                            <!-- News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago
                                </div>
                                <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                            </div>
                        </div>
                    </div>

                    <!-- Horizontal News Box -->
                    <div class="news horizontal no-border">
                        <div class="col l4 col m4 col s12 no-padding">
                            <!-- News Image -->
                            <div class="news-image">
                                <img class="responsive-img" src="http://placehold.it/350x360/f5f5f5?text=News Image" alt="news Image">
                            </div>
                        </div>
                        <div class="col l8 col m8 col s12 no-padding">
                            <!-- News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago
                                </div>
                                <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l3 col m6 col s12">
                <!--  Vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!-- News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                    </div>
                </div>
            </div>
            <div class="col l3 col m6 col s12">
                <!-- Vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!-- News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum</p></div>
                    </div>
                </div>
            </div>
            <div class="col l3 col m6 col s12">
                <!-- Vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!-- News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum Integer.</p></div>
                    </div>
                </div>
            </div>
            <div class="col l3 col m6 col s12">
                <!--  Vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!-- News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l12 col m12 col s12">
                <!-- blockquote -->
                <div class="blockquote z-depth-1">
                    <span>Hot News:</span> Nullam Quies ante. rhoncus augue pharetra sed. Mauris tincidunt, nunc vitae tristique porta, nisi arcu pulvinar enim, in pretium mi ex quis felis. Integer pharetra sit amet ligula sit amet porttitor. Praesent condimentum augue ut ornare tempor.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l6 col m6 col s12">
                <!-- News Blog Box -->
                <div class="news-blog z-depth-1">
                    <!-- News Blog Image -->
                    <div class="image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!-- News Blog Category -->
                    <div class="news-category">
                        <span class="purple">Life</span>
                        <!-- Dropdown -->
                        <div class="news-dropdown">
                            <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown1"><i class="fa fa-ellipsis-v "></i></a>
                            <ul id="dropdown1" class="dropdown-content">
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- News Blog Description -->
                    <div class="news-description">
                        <div class="news-time">
                            21 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0);"> Netanyachu's Likud Party <br> Sweeps to Israel election. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus <br> non rutrum. Integer ut nisi risus In dapibus ac tellus.</p></div>
                    </div>
                </div>
            </div>
            <div class="col l6 col m6 col s12">
                <!-- News Blog Box -->
                <div class="news-blog z-depth-1">
                    <!-- News Blog Video -->
                    <div class="video-container no-controls">
                        <iframe src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0;autohide=1" allowfullscreen></iframe>
                    </div>
                    <!-- News Blog Category -->
                    <div class="news-category">
                        <span class="orange">Video</span>
                        <!-- Dropdown -->
                        <div class="news-dropdown">
                            <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown2"><i class="fa fa-ellipsis-v "></i></a>
                            <ul id="dropdown2" class="dropdown-content">
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- News Blog Description -->
                    <div class="news-description">
                        <div class="news-time">
                            21 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0);"> Party Sweepsto Israel <br> election Victory </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac <br> tellus non rutrum. Integer ut nisi risus.</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l6 col m6 col s12">
                <!-- News Blog Solid Box -->
                <div class="news-blog solid z-depth-1">
                    <!-- News Blog Category -->
                    <div class="news-category">
                        <span class="pink">More</span>
                        <!-- Dropdown -->
                        <div class="news-dropdown">
                            <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown3"><i class="fa fa-ellipsis-v "></i></a>
                            <ul id="dropdown3" class="dropdown-content">
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- News Blog Description -->
                    <div class="news-description center-align">
                        <div class="quote"><i class="fa fa-quote-left"></i></div>
                        <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna et bibendum leo metus vel magna.  </a></div>
                        <div class="news-content"><p>President of ThemeLeague <br> Dark Waider</p></div>
                    </div>
                </div>
            </div>
            <div class="col l6 col m6 col s12">
                <!-- News Blog Box -->
                <div class="news-blog z-depth-1">
                    <!-- News Blog Image -->
                    <div class="image">
                        <img class="responsive-img" src="http://placehold.it/350x235?text=News Image" alt="news Image">
                    </div>
                    <!-- News Blog Category -->
                    <div class="news-category">
                        <span class="green">Money</span>
                        <!-- Dropdown -->
                        <div class="news-dropdown">
                            <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown4"><i class="fa fa-ellipsis-v "></i></a>
                            <ul id="dropdown4" class="dropdown-content">
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- News Blog Description -->
                    <div class="news-description">
                        <div class="news-time">
                            21 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0);">Party Sweepsto Israel <br> election Victory</a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus <br> ac tellus non rutrum. Integer.</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l6 col m12 col s12">
                <div class="z-depth-1">
                    <!-- Horizontal News Box -->
                    <div class="news horizontal">
                        <div class="col l4 col m4 col s12 no-padding">
                            <!-- News Image -->
                            <div class="news-image">
                                <img src="http://placehold.it/350x360?text=News Image" class="responsive-img" alt="news Image">
                            </div>
                        </div>
                        <div class="col l8 col m8 col s12 no-padding">
                            <!-- News  Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago
                                </div>
                                <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                            </div>
                        </div>
                    </div>

                    <!-- Horizontal News Box -->
                    <div class="news horizontal no-border">
                        <div class="col l4 col m4 col s12 no-padding">
                            <!-- News Image -->
                            <div class="news-image">
                                <img src="http://placehold.it/350x360/f5f5f5?text=News Image" class="responsive-img" alt="news Image">
                            </div>
                        </div>
                        <div class="col l8 col m8 col s12 no-padding">
                            <!-- News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago
                                </div>
                                <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col l3 col m6 col s12">
                <!-- Vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- News Image -->
                    <div class="news-image">
                        <img src="http://placehold.it/350x235?text=News Image" class="responsive-img" alt="news Image">
                    </div>
                    <!-- News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                    </div>
                </div>
            </div>

            <div class="col l3 col m6 col s12">
                <!-- Vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- News Image -->
                    <div class="news-image">
                        <img src="http://placehold.it/350x235?text=News Image" class="responsive-img" alt="news Image">
                    </div>
                    <!-- News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum Integer.</p></div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col l3 col m6 col s12">
                    <div class="col l12 col m12 col s12 no-padding">
                        <!--  Vertical News Box -->
                        <div class="news vertical z-depth-1 margin-bottom-20">
                            <!-- News Image -->
                            <div class="news-image">
                                <img src="http://placehold.it/350x235?text=News Image" class="responsive-img" alt="news Image">
                            </div>
                            <!-- News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago
                                </div>
                                <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur. </a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col l12 col m12 col s12 no-padding">
                        <!-- Vertical News Box -->
                        <div class="news vertical z-depth-1">
                            <!-- News Image -->
                            <div class="news-image">
                                <img src="http://placehold.it/350x235?text=News Image" class="responsive-img" alt="news Image">
                            </div>
                            <!-- News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago
                                </div>
                                <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l6 col m6 col s12">
                    <!-- Vertical News Box -->
                    <div class="news vertical z-depth-1">
                        <!-- News Image -->
                        <div class="news-image">
                            <img src="http://placehold.it/350x236?text=News Image" class="responsive-img" alt="news Image">
                        </div>
                        <!-- News Description -->
                        <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i> 9 min ago
                            </div>
                            <div class="news-title large-font"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                            <div class="news-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur erat velit, tristique eu molestie vitae, malesuada eget est. Vestibulum ut aliquam libero. Nunc nec risus dolor. Aliquam pellentesque eget lectus vel lobortis. Donec gravida nec tortor ac semper. Aliquam dapibus dolor et metus feugiat porta. Sed in mauris lorem. Quisque ultrices nulla dui. Praesent sollicitudin consectetur tincidunt.</p>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In lobortis dignissim eros sed convallis. Donec et quam eros. Suspendisse a enim sit amet nisl accumsan malesuada. Maecenas sodales velit at molestie blandit. Nullam maximus tellus ante, vitae finibus lorem luctus vel. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col l3 col m12 col s12 no-padding">
                    <div class="col l12 col m6 col s12">
                        <!-- Vertical News Box -->
                        <div class="news vertical z-depth-1 margin-bottom-20">
                            <!-- News Image -->
                            <div class="news-image">
                                <img src="http://placehold.it/350x235?text=News Image" class="responsive-img" alt="news Image">
                            </div>
                            <!-- News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago
                                </div>
                                <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur. </a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col l12 col m6 col s12">
                        <!-- Vertical News Box -->
                        <div class="news vertical z-depth-1">
                            <!-- News Image -->
                            <div class="news-image">
                                <img src="http://placehold.it/350x235?text=News Image" class="responsive-img" alt="news Image">
                            </div>
                            <!-- News Description -->
                            <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago
                                </div>
                                <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                                <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="row">
                <div class="col l9 col m12 col s12">
                    <!-- Thumbnail Slider -->
                    <div class="thumbnail-slider z-depth-1">
                        <!-- Thumbnail Slider Category -->
                        <ul class="tabs">
                            <li class="tab"><a class="active" href="#News-category1">March Sadness</a></li>
                            <li class="tab"><a href="#News-category2">Snapshot</a></li>
                            <li class="tab"><a href="#News-category3">Terrorist Attack Donbass</a></li>
                            <li class="tab"><a href="#News-category4">Prince Charles and Camilla visit the U.S.</a></li>
                            <li class="tab"><a href="#News-category5">Your Take: Readers Photos of the Aurora Borealis</a></li>
                        </ul>
                        <!-- Thumbnail Slider 1 -->
                        <div id="News-category1">
                            <div class="camera_wrap camera_magenta_skin" id="camera_wrap_1">
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Thumbnail Slider 2 -->
                        <div id="News-category2">
                            <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Thumbnail Slider 3 -->
                        <div id="News-category3">
                            <div class="camera_wrap camera_magenta_skin" id="camera_wrap_3">
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Thumbnail Slider 4 -->
                        <div id="News-category4">
                            <div class="camera_wrap camera_magenta_skin" id="camera_wrap_4">
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Thumbnail Slider 5 -->
                        <div id="News-category5">
                            <div class="camera_wrap camera_magenta_skin" id="camera_wrap_5">
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                                <div data-thumb="http://placehold.it/350x235?text=News Image?1443511387528" data-src="http://placehold.it/350x235?text=News Image?1443511387528">
                                    <div class="camera_caption fadeFromBottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l3 col m12 col s12">
                    <!-- News Sidebar -->
                    <div class="sidbar-box z-depth-1">
                        <div class="sidebar-title">New Stories</div>
                        <div class="news-sidebar">
                            <div class="news-box">
                                <!-- News Sidebar Image -->
                                <div class="image">
                                    <img src="http://placehold.it/350x235?text=News Image" alt="news Image">
                                </div>
                                <!-- News Sidebar Detail -->
                                <div class="news-detail">
                                    <div class="news-category">
                                        <a href="javascript:void(0);">World | 21 min ago </a>
                                    </div>
                                    <div class="news-title">
                                        <a href="javascript:void(0);"> 5 things you need to know wenesday</a>
                                    </div>
                                </div>
                            </div>

                            <div class="news-box">
                                <!-- News Sidebar Image -->
                                <div class="image">
                                    <img src="http://placehold.it/350x235?text=News Image" alt="news Image">
                                </div>
                                <!-- News Sidebar Detail -->
                                <div class="news-detail">
                                    <div class="news-category">
                                        <a href="javascript:void(0);">Tech | 21 min ago </a>
                                    </div>
                                    <div class="news-title">
                                        <a href="javascript:void(0);"> Auti-austeriry Protest Turns Violent In Germany</a>
                                    </div>
                                </div>
                            </div>

                            <div class="news-box">
                                <!-- News Sidebar Image -->
                                <div class="image">
                                    <img src="http://placehold.it/350x235?text=News Image" alt="news Image">
                                </div>
                                <!-- News Sidebar Detail -->
                                <div class="news-detail">
                                    <div class="news-category">
                                        <a href="javascript:void(0);">Money | 21 min ago </a>
                                    </div>
                                    <div class="news-title">
                                        <a href="javascript:void(0);"> Flying Cars: The near Future, From SXSW</a>
                                    </div>
                                </div>
                            </div>

                            <div class="news-box">
                                <!-- News Sidebar Image -->
                                <div class="image">
                                    <img src="http://placehold.it/350x235?text=News Image" alt="news Image">
                                </div>
                                <!-- News Sidebar Detail -->
                                <div class="news-detail">
                                    <div class="news-category">
                                        <a href="javascript:void(0);">Life | 21 min ago </a>
                                    </div>
                                    <div class="news-title">
                                        <a href="javascript:void(0);"> No end in Signt for California Drought</a>
                                    </div>
                                </div>
                            </div>

                            <div class="news-box">
                                <!-- News Sidebar Image -->
                                <div class="image">
                                    <img src="http://placehold.it/350x235?text=News Image" alt="news Image">
                                </div>
                                <!-- News Sidebar Detail -->
                                <div class="news-detail">
                                    <div class="news-category">
                                        <a href="javascript:void(0);">World | 21 min ago </a>
                                    </div>
                                    <div class="news-title">
                                        <a href="javascript:void(0);"> Boehner Coup by Conservatives is Unlikely</a>
                                    </div>
                                </div>
                            </div>

                            <div class="news-box">
                                <!-- News Sidebar Image -->
                                <div class="image">
                                    <img src="http://placehold.it/350x235?text=News Image" alt="news Image">
                                </div>
                                <!-- News Sidebar Detail -->
                                <div class="news-detail">
                                    <div class="news-category">
                                        <a href="javascript:void(0);">Travel | 21 min ago </a>
                                    </div>
                                    <div class="news-title">
                                        <a href="javascript:void(0);"> Market Reaction to fed rate talk: 3 scenarious</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<!-- Footer -->
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l12 col m12 col s12">
            </div>
        </div>
    </div>



    <!-- Footer Bottom -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <!-- Copyright Text -->
                <div class="col l4 col m12 col s12">
                    &copy; Copyright 2015 Material News by ThemeLeague
                </div>
                <div class="col l4 col m12 col s12">
                    <!-- Social Icon -->
                    <div class="social-icon">
                        <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                        <a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a>
                        <a href="javascript:void(0);"><i class="fa fa-instagram"></i></a>
                        <a href="javascript:void(0);"><i class="fa fa-youtube"></i></a>
                        <a href="javascript:void(0);"><i class="fa fa-vine"></i></a>
                        <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                        <a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
                        <a href="javascript:void(0);"><i class="fa fa-rss"></i></a>
                        <a href="javascript:void(0);"><i class="fa fa-tumblr"></i></a>
                    </div>
                </div>
                <div class="col l4 col m12 col s12">
                    <!-- Footer Menu -->
                    <div class="footer-menu">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Privacy</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Advertisement</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Jquery -->
<script src="js/jquery-min.js"></script>
<!-- Materialize JS -->
<script src="js/materialize.js"></script>
<!-- Plugin JS -->
<script src="js/pgwslider.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script src="js/jquery.liquid-slider.js"></script>
<script type='text/javascript' src='js/camera.js'></script>
<!-- Custom Js -->
<script src="js/init.js"></script>
</body>
</html>