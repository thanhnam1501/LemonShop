
<!DOCTYPE html>
<html lang="en">
    <!--
        **********************************************************************************************************
        Copyright (c) 2017 Webvillee
        ********************************************************************************************************** -->
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="My Shop Multipurpose Responsive HTML Template" />
    <meta name="author" content="webvillee.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lemon Shop </title>
    <!-- Bootstrap -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Master Css -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/switcher.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet" id="colors">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!--//==Preloader Start==//-->
    <div class="preloader">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>
    <!--//==Preloader End==//-->
    <!--//==Header Start==//-->
    <header id="main-header">
        <!--//=======Top Bar Start=======//-->
        <div class="top-bar">
            <div class="container">
                <!--======Hidden for xs device========-->
                <div class="row hidden-xs">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="top-bar-menu">
                            <nav>
                                <ul>
                                    <li><a href="#">Offers</a></li>
                                    <li><a href="#">Track Order</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="top-bar-menu textR">
                            <nav id="user-top-bar">
                                <ul class="list-inline textL">
                                    <li>
                                        <a href="#">VND <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="#">VND</a></li>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Việt Nam <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="#">Việt Nam</a></li>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Français</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--======Hidden for sm, md and lg device========-->
                <div class="row hidden-sm hidden-md hidden-lg">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="top-bar-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Việt Nam <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="#">Việt Nam</a></li>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Français</a></li>
                                        </ul>
                                    </li>
                                   <li>
                                        <a href="#">VND <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="#">VND</a></li>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Middle header -->
        <div class="middle header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <a class="logo" href="#">
                            <img class="site_logo" alt="Site Logo"  src="img/logo.png"/>
                        </a>    
                    </div>
                    <div class="col-md-8 middle-search">
                        <form class="search-form">
                            <div class="input-group">
                                <input type="text" class="form-control input-lg search-input" placeholder="Search here..." required="required">
                                <div class="input-group-btn">
                                    <div class="input-group">
                                        <select class="form-control input-lg search-select">
                                            <option>All Categories</option>
                                            <option>Deals</option>
                                            <option>Coupons</option>
                                            <option>Discounts</option>
                                        </select>
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-lg btn-search btn-block">
                                                <i class="fa fa-search font-16"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <ul class="middle-icon">
                            <li id="cart"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i><sup class="shop-cart-total site-bg-color">02</sup></a>
                                <div class="mini-cart-wrapper top-sub-menu sub-menu-right shop_hide">
                                    <!-- Product List -->
                                    <div class="mc-pro-list fix">
                                        <div class="mc-sin-pro fix">
                                            <a href="#" class="mc-pro-image float-left"><img src="img/1.jpg" alt=""></a>
                                            <div class="mc-pro-details fix">
                                                <h5>Blue jeans lorem</h5>
                                                <span>1 x $100.00</span>
                                                <a><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="mc-sin-pro fix">
                                            <a href="#" class="mc-pro-image float-left"><img src="img/2.jpg" alt=""></a>
                                            <div class="mc-pro-details fix">
                                                <h5>T-shirt full lorem</h5>
                                                <span>1 x $100.00</span>
                                                <a><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sub Total -->
                                    <!--<div class="mc-subtotal fix">
                                        <h4>Subtotal <span>$200.00</span></h4>
                                    </div>-->
                                    <!-- Cart Button -->
                                    <div class="mc-button">
                                        <a href="#" class="button color-hover small">View</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--//==Navbar Start==//-->
        <div id="main-menu" class="wv-main-menu">
            <!-- Menu -->
            <div class="wathemes-menu relative">
                <!-- navbar -->
                <div class="navbar navbar-default navbar-bg-light" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="navbar-header">
                                    <!-- Button For Responsive toggle -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span></button> 
                                        <!-- Logo -->
                                        <a class="navbar-brand responsive_logo" href="index.html">
                                            <img class="site_logo" alt="Site Logo"  src="img/logo1.png"/>
                                        </a>
                                    </div>
                                    <!-- Navbar Collapse -->
                                    <div class="navbar-collapse collapse">
                                        <!-- nav -->
                                        <ul class="nav navbar-nav">
                                            <!-- Home Menu -->
                                            <li>
                                                <a href="index.html">Home</a> 
                                            </li>
                                            <li class="mega-menu">
                                                <a href="">Category <span class="caret menu-arrow"></span></a>
                                                <ul class="dropdown-menu wv_menu_color">
                                                    <li>
                                                        <!-- Home Mage Menu grids Begins -->
                                                        <div class="row">
                                                            <!-- Home Variation 1 Block -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">Phái Mạnh</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="#">T-shirt</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Shirt</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Jackets</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Jeans</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Trousers</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Home Variation 1 Block -->
                                                            <!-- Home Variation 2 Block -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">Phái Đẹp</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="#">T-shirt</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Shirt</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Jackets</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Jeans</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Trousers</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Home Variation 2 Block -->
                                                            <!-- One Page variation 1 -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">Phụ Kiện</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="#">Giầy</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Đồng Hồ</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Túi Sách</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Trang Sức</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Sunglasses</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- One Page variation 1 -->
                                                            <!-- One Page variation 2 -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">All</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="#">Wallets</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Bracelets</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- One Page variation 2 -->
                                                        </div>
                                                        <!-- Ends Home Mage Menu Block -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Pages Menu Ends -->
                                            <!--Menu -->
                                            <li>
                                                <a href="#">Shop pages<span class="caret menu-arrow"></span></a> 
                                                <!--  Dropdown Menu -->
                                                <ul class="dropdown-menu wv_menu_color">
                                                    <!--  Grid Block -->
                                                    <li>
                                                        <a href="#">Categoty</a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="shop-left-sidebar.html">category left Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-right-sidebar.html">category right Sidebar</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- Ends  Grid Block -->
                                                    <li>
                                                        <a href="#">Categoty list</a>
                                                        <ul class="dropdown-menu wv_menu_color">
                                                            <li>
                                                                <a href="shop-list-left-sidebar.html">list left Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-list-right-sidebar.html">list right Sidebar</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- Ends  Grid Block -->
                                                    <li>
                                                        <a href="#">Shop single</a>
                                                        <ul class="dropdown-menu wv_menu_color">
                                                            <li>
                                                                <a href="shop-single-left-sidebar.html">Shop Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-single.html">Shop fullwidth</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- Ends Grid Block -->
                                                </ul>
                                            </li>
                                            <!-- Blog Menu -->
                                            <li>
                                                <a href="#">blog<span class="caret menu-arrow"></span></a> 
                                                <ul class="dropdown-menu wv_menu_color">
                                                    <li>
                                                        <a href="blog.html">blog sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-single.html">blog single</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Ends blog Menu -->
                                            <!-- Contact Block -->
                                            <li>
                                                <a href="contact.html">Contact us</a>
                                            </li>
                                            <!-- Ends Contact Block -->
                                            <!-- pages Block -->
                                            <li>
                                                <a href="#">pages<span class="caret menu-arrow"></span></a>
                                                <ul class="dropdown-menu wv_menu_color">
                                                    <li>
                                                        <a href="{{route ( 'cart' )}}">shopping cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.html">checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">wishlist</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Ends pages Block -->
                                            <!-- Ends Widgets Block -->
                                        </ul>
                                        <!-- Right nav -->
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- navbar -->
                </div>
                <!--  Menu -->
            </div>
            <!--//==Navbar End==//-->
        </header>
        <!--//==Header End==//-->
        <div class="clear"></div>
        <div class="slider-wrap">
            <div class="fullwidthbanner-container">
                <div class="fullwidthbanner">
                    <ul>
                        <!-- SLIDE 4 -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="img/slider/bg2.png"  alt="Image" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfb customin tp-resizeme slide-one-text-1"
                            data-x="385"
                            data-y="200"
                            data-hoffset="0"
                            data-voffset="0"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1850"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.5"
                            data-endelementdelay="0.1"
                            data-linktoslide="next"
                            style="z-index: 12;">new arrivals-2017</div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sft tp-resizeme slide-one-text-2"
                            data-x="380"
                            data-y="225"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="1600"
                            data-start="2050"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.7"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power1.easeOut"
                            style="z-index: 7;line-height: 1;">new style</div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption sft tp-resizeme slide-one-text-3"
                            data-x="380"
                            data-y="270"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="1600"
                            data-start="2250"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.7"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power1.easeOut"
                            style="z-index: 7;line-height: 1.5;">clothes</div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfb customin tp-resizeme slide-one-text-4"
                            data-x="380"
                            data-y="390"
                            data-hoffset="0"
                            data-voffset="0"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="2300"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.7"
                            data-endelementdelay="0.1"
                            data-linktoslide="next"
                            style="z-index: 12;"><span>Suspendisse commodo auctor molestie. Mauris arisusvitae massa consequat<br>pharetra. Suspendisse dapibus erat lectus rutrum bibendum.</span></div>
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption sfb customin tp-resizeme slide-one-text-5"
                            data-x="380"
                            data-y="490"
                            data-hoffset="0"
                            data-voffset="0"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="2300"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.7"
                            data-endelementdelay="0.1"
                            data-linktoslide="next"
                            style="z-index: 12;"><a class="shop_btn" href="#">Shop Now</a></div>
                        </li>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="img/slider/bg1.png"  alt="Image" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfb customin tp-resizeme slide-one-text-6"
                            data-x="1050"
                            data-y="160"
                            data-hoffset="0"
                            data-voffset="0"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1850"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-linktoslide="next"
                            style="z-index: 12;">latest</div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sft tp-resizeme slide-one-text-7"
                            data-x="1050"
                            data-y="214"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="2300"
                            data-start="2000"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power1.easeOut"
                            style="z-index: 7;line-height: 1;">trending<br>fashion</div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption sft tp-resizeme slide-one-text-8"
                            data-x="1050"
                            data-y="354"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="1600"
                            data-start="2200"
                            data-easing="Power4.easeOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-endspeed="500"
                            data-endeasing="Power1.easeOut"
                            style="z-index: 7;line-height: 1.5;">50%OFF</div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfb customin tp-resizeme slide-one-text-9"
                            data-x="1050"
                            data-y="465"
                            data-hoffset="0"
                            data-voffset="0"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="2300"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-linktoslide="next"
                            style="z-index: 12;">Suspendisse commodo auctor molestie. Mauris arisusvitae<br>massa consequat pharetra. Suspendisse dapibus.</div>
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption sfb customin tp-resizeme slide-one-text-5"
                            data-x="1050"
                            data-y="540"
                            data-hoffset="0"
                            data-voffset="0"
                            data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="2300"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-linktoslide="next"
                            style="z-index: 12;"><a class="shop_btn" href="#">Shop Now</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END HOME SLIDER -->
        <section id="shop-category" class="tb-margin-30 shop-category">
            <div class="container no-pad">
                <div class="col-sm-6 col-md-6 wv_hovereffect cetagory-left">
                    <div class="wv_overlay"></div>
                    <div class="imagee">
                        <img src="img/all/shop-left.jpg" alt="shop-left"/>
                    </div>
                    <div class="winter-collection">
                        <h1> Mega sale</h1>
                        <p>winter <br/>collection</p>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 wv_hovereffect womens-sale">
                    <div class="wv_overlay1"></div>
                    <div class="imagee">
                        <img src="img/all/shop-right-1.jpg" alt=" womens sale"/>
                    </div>
                    <h2>Womens</h2>
                </div>
                <div class="col-sm-3 col-md-3 wv_hovereffect mens-sale ">
                    <div class="wv_overlay2"></div>
                    <div class="imagee">
                        <img src="img/all/shop-right-2.jpg" alt="mens sale"/>
                    </div>
                    <h2>Mens</h2>
                </div>
                <div class="col-sm-6 col-md-6 wv_hovereffect accesories">
                    <div class="wv_overlay3"></div>
                    <div class="imagee">
                        <img src="img/all/shop-right-bottom.jpg" alt="Accesories"/>
                    </div>
                    <div class="accesories-title">
                        <h2>fresh</h2>
                        <p>Man-New Accessories</p>
                    </div>
                </div>
            </div>
        </section>
        <!--//==Women Section Start==//-->
        <section class="women-section padTB100">
            <div class="container">
                <div class="row pad-s15">
                    <div class="col-md-12">
                        <div class="wv-heading-style2">
                            <h2>Phái Đẹp</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!--wa Info Tabs-->
                        <div class="wa-info-tabs">
                            <!--wa Tabs-->
                            <div class="wa-tabs category-tab" id="wa-tabs">
                                <!--Tab Btns-->
                                <div class="wv_tab_btns clearfix">
                                    <a href="#wa-accessories" class="womens_btn tab-btn wv_tbtn active-btn">Phụ Kiện</a>
                                    <a href="#wa-latest" class="womens_btn tab-btn wv_tbtn">latest arrival</a>
                                    <a href="#wa-best" class="womens_btn tab-btn wv_tbtn">best seller</a>
                                    <a href="#wa-popular" class="womens_btn tab-btn wv_tbtn">most popular</a>
                                </div>
                                <!--Tabs Container-->
                                <div class="tabs-container wv_tabs_container">
                                    <div class="row">
                                        <!--Tab first Content item Start-->
                                        <div class="tab womens_tab active-tab" id="wa-accessories">
                                            <div class="owl-carousel-style1" id="women-carousel">
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women1.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women2.jpg" alt="Women Thumbnail">
                                                                <div class="ribbon"><span>New</span></div>
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women3.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women4.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women1.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women2.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women3.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women4.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Tab first Content item End-->
                                        <!--Tab second Content item Start-->
                                        <div class="tab womens_tab" id="wa-latest">
                                            <div class="owl-carousel-style1" id="women-latest">
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women2.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women3.jpg" alt="Women Thumbnail">
                                                                <div class="ribbon"><span>New</span></div>
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women1.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women4.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women1.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women2.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women3.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women4.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Tab second Content item End-->
                                        <!--Tab third Content item Start-->
                                        <div class="tab womens_tab" id="wa-best">
                                            <div class="owl-carousel-style1" id="women-best">
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women3.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women1.jpg" alt="Women Thumbnail">
                                                                <div class="ribbon"><span>New</span></div>
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women2.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women4.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women1.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women2.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women3.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women4.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Tab third Content item End-->
                                        <!--Tab forth Content item Start-->
                                        <div class="tab womens_tab " id="wa-popular">
                                            <div class="owl-carousel-style1" id="women-popular">
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women4.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women1.jpg" alt="Women Thumbnail">
                                                                <div class="ribbon"><span>New</span></div>
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women2.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women3.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women1.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women2.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women3.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/women/women4.jpg" alt="Women Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Tab forth Content item End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//==Women Section End==//-->
        <!--//======= Banner_add Start =======//--> 
        <section class="banner-add">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 add-banner">
                        <div class="banner-left">
                            <img src="img/all/banner_left.jpg" alt=""/>
                        </div>
                        <div class="left-banner-title">
                            <h3>WOMEN TOP</h3>
                            <p>SAVE UP TO 50% OFF</p>
                            <button type="button" class="wv_button marT15">VIEW collection</button>
                        </div>
                    </div>
                    <div class="col-md-6 add-banner">
                        <div class="banner-right">
                            <img src="img/all/banner_right.jpg" alt=""/>
                        </div>
                        <div class="right-banner-title">
                            <h3>MEN SUITS</h3>
                            <p>SAVE UP TO 60% OFF</p>
                            <button type="button" class="wv_button marT15">VIEW collection</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//======= Banner_add Start End =======//--> 
        <!--//======= Men Section Start=======//-->
        <!--//==Men Section Start==//-->
        <section class="login-page padTB100">
            <div class="container">
                <div class="row pad-s15">
                    <div class="col-md-12">
                        <div class="wv-heading-style2">
                            <h2>Phái Mạnh</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!--wa Info Tabs-->
                        <div class="wa-info-tabs">
                            <!--wa Tabs-->
                            <div class="wa-tabs category-tab" id="wa-tabs1">
                                <!--Tab Btns-->
                                <div class="wv_tab_btns clearfix">
                                    <a href="#wa-accessories1" class="mens_btn tab-btn wv_tbtn active-btn">Phụ Kiện</a>
                                    <a href="#wa-latest1" class="mens_btn tab-btn wv_tbtn">latest arrival</a>
                                    <a href="#wa-best1" class="mens_btn tab-btn wv_tbtn">best seller</a>
                                    <a href="#wa-popular1" class="mens_btn tab-btn wv_tbtn">most popular</a>
                                </div>
                                <!--Tabs Container-->
                                <div class="tabs-container wv_tabs_container">
                                    <div class="row">
                                        <!--Tab first Content item Start-->
                                        <div class="tab active-tab mens_tab" id="wa-accessories1">
                                            <div class="owl-carousel-style1" id="men-carousel">
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men1.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men2.jpg" alt="Men Thumbnail">
                                                                <div class="ribbon"><span>New</span></div>
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men3.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men4.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men1.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men2.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men3.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men4.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Tab first Content item End-->
                                        <!--Tab second Content item Start-->
                                        <div class="tab mens_tab" id="wa-latest1">
                                            <div class="owl-carousel-style1" id="men-latest">
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men2.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men1.jpg" alt="Men Thumbnail">
                                                                <div class="ribbon"><span>New</span></div>
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men3.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men4.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men1.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men2.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag2"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men3.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men4.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Tab second Content item End-->
                                        <!--Tab third Content item Start-->
                                        <div class="tab mens_tab" id="wa-best1">
                                            <div class="owl-carousel-style1" id="men-best">
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men3.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men1.jpg" alt="Men Thumbnail">
                                                                <div class="ribbon"><span>New</span></div>
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men2.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men4.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men1.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men2.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men3.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men4.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Tab third Content item End-->
                                        <!--Tab forth Content item Start-->
                                        <div class="tab mens_tab" id="wa-popular1">
                                            <div class="owl-carousel-style1" id="men-popular">
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men4.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men1.jpg" alt="Men Thumbnail">
                                                                <div class="ribbon"><span>New</span></div>
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men2.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men3.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men1.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men2.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men3.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wa-item">
                                                    <div class="col-md-12">
                                                        <div class="wa-theme-design-block">
                                                            <figure class="dark-theme">
                                                                <img src="img/men/men4.jpg" alt="Men Thumbnail">
                                                                <span class="block-sticker-tag1">
                                                                    <span class="off_tag"><strong><i class="fa fa-shopping-basket" aria-hidden="true"></i></strong></span>
                                                                </span> 
                                                                <span class="block-sticker-tag2">                                      
                                                                    <span class="off_tag1"><strong><i class="fa fa-heart-o" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                                <span class="block-sticker-tag3">
                                                                    <span class="off_tag2 btn-action btn-quickview" data-toggle="modal" data-target="#quickView"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></span>
                                                                </span>
                                                            </figure>
                                                            <div class="block-caption1">
                                                                <h4>Lorem Crochet Applique Ipsum</h4>
                                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                                    <span class="price-text-color ">T-shirt</span>
                                                                </div>
                                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                                    <ul class="wv_rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><span class="review">1 review</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clear"></div>
                                                                <div class="price col-md-12">
                                                                    <span class="sell-price">$120.00</span>
                                                                    <span class="actual-price">$170.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Tab forth Content item End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//==Men Section End==//-->  
        <section class="accessories-add">
            <div class="container">
                <div class="col-md-12 add-banner">
                    <div class="accessories_overlay"></div>
                    <img src="img/all/accessories_add.jpg" alt="">
                    <div class="accessories_banner">
                        <h4>Accessories</h4>
                        <p>Sale up to 75% off and Get an existing offer of<br>brand new collections</p>
                    </div>
                </div>
            </div>
        </section>
        <!--//======= Blog Section Start=======//-->
        <section class="wv-main-blog padT100 padB100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wv-heading-style1 pad-s15">
                            <h2>latest from blog</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row pad-s15">
                            <div class="owl-carousel-style1" id="blog-carousel">
                                <div class="wa-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/all/blog1.jpg" alt="Coupon Thumbnail">
                                                <span class="block-sticker-tag">
                                                    <span class="off_tag"><strong>15 <span class="clear">April</span></strong></span>
                                                </span>
                                            </figure>
                                            <div class="block-caption">
                                                <div class="news_icon meta-info">
                                                    <p><a href="">arun acharya</a></p>
                                                    <p><a href="">21 comments</a></p>
                                                </div>
                                                <h4>Lorem ipsum dolor sit consectetur</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit fermentum erosat .</p>
                                                <a href="blog.html" class="wv_text_button">Read more...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/all/blog2.jpg" alt="Coupon Thumbnail">
                                                <span class="block-sticker-tag">
                                                    <span class="off_tag"><strong>15 <span class="clear">April</span></strong></span>
                                                </span>
                                            </figure>
                                            <div class="block-caption">
                                                <div class="news_icon meta-info">
                                                    <p><a href="">arun acharya</a></p>
                                                    <p><a href="">21 comments</a></p>
                                                </div>
                                                <h4>Lorem ipsum dolor sit consectetur</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit fermentum erosat .</p>
                                                <a href="blog.html" class="wv_text_button">Read more...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/all/blog3.jpg" alt="Coupon Thumbnail">
                                                <span class="block-sticker-tag">
                                                    <span class="off_tag"><strong>15 <span class="clear">April</span></strong></span>
                                                </span>
                                            </figure>
                                            <div class="block-caption">
                                                <div class="news_icon meta-info">
                                                    <p><a href="">arun acharya</a></p>
                                                    <p><a href="">21 comments</a></p>
                                                </div>
                                                <h4>Lorem ipsum dolor sit consectetur</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit fermentum erosat .</p>
                                                <a href="blog.html" class="wv_text_button">Read more...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/all/blog1.jpg" alt="Coupon Thumbnail">
                                                <span class="block-sticker-tag">
                                                    <span class="off_tag"><strong>15 <span class="clear">April</span></strong></span>
                                                </span>
                                            </figure>
                                            <div class="block-caption">
                                                <div class="news_icon meta-info">
                                                    <p><a href="">arun acharya</a></p>
                                                    <p><a href="">21 comments</a></p>
                                                </div>
                                                <h4>Lorem ipsum dolor sit consectetur</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit fermentum erosat .</p>
                                                <a href="blog.html" class="wv_text_button">Read more...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/all/blog2.jpg" alt="Coupon Thumbnail">
                                                <span class="block-sticker-tag">
                                                    <span class="off_tag"><strong>15 <span class="clear">April</span></strong></span>
                                                </span>
                                            </figure>
                                            <div class="block-caption">
                                                <div class="news_icon meta-info">
                                                    <p><a href="">arun acharya</a></p>
                                                    <p><a href="">21 comments</a></p>
                                                </div>
                                                <h4>Lorem ipsum dolor sit consectetur</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit fermentum erosat .</p>
                                                <a href="blog.html" class="wv_text_button">Read more...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/all/blog3.jpg" alt="Coupon Thumbnail">
                                                <span class="block-sticker-tag">
                                                    <span class="off_tag"><strong>15 <span class="clear">April</span></strong></span>
                                                </span>
                                            </figure>
                                            <div class="block-caption">
                                                <div class="news_icon meta-info">
                                                    <p><a href="">arun acharya</a></p>
                                                    <p><a href="">21 comments</a></p>
                                                </div>
                                                <h4>Lorem ipsum dolor sit consectetur</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit fermentum erosat .</p>
                                                <a href="blog.html" class="wv_text_button">Read more...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wa-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/all/blog1.jpg" alt="Coupon Thumbnail">
                                                <span class="block-sticker-tag">
                                                    <span class="off_tag"><strong>15 <span class="clear">April</span></strong></span>
                                                </span>
                                            </figure>
                                            <div class="block-caption">
                                                <div class="news_icon meta-info">
                                                    <p><a href="">arun acharya</a></p>
                                                    <p><a href="">21 comments</a></p>
                                                </div>
                                                <h4>Lorem ipsum dolor sit consectetur</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit fermentum erosat .</p>
                                                <a href="blog.html" class="wv_text_button">Read more...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//======= Blog Section End=======//-->          
        <!--//======= Service Start =======//--> 
        <section class="Service">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-md-3 service_main">
                        <div class="service_icon">
                            <img src="img/icons/icon1.png" alt="">
                        </div>
                        <div class="service_text">
                            <h5>free shipping</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 service_main">
                        <div class="service_icon">
                            <img src="img/icons/icon2.png" alt="">
                        </div>
                        <div class="service_text">
                            <h5>24/7 Support</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 service_main">
                        <div class="service_icon">
                            <img src="img/icons/icon3.png" alt="">
                        </div>
                        <div class="service_text">
                            <h5>money back guarantee</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 service_main">
                        <div class="service_icon">
                            <img src="img/icons/icon4.png" alt="">
                        </div>
                        <div class="service_text">
                            <h5>free gift coupons</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//======= Service End =======//--> 
        <!--//=======Footer Start=======//--> 
        <footer id="main-footer"  class="dark-footer">
            <!--Upper Footer Block-->
            <div class="upper-footer wv_footer">
                <div class="container">
                    <div class="row pad-s15">
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget contact-widget">
                                <h3>Contact</h3>
                                <p><span class="square-icon"><i class="fa fa-map-marker"></i></span>PO Box 16122 Collins Street <br>
                                    West Victoria 8007 Australia
                                </p>
                                <p><span class="square-icon"><i class="fa fa-phone"></i></span>+61 3 8376 6284 <br>
                                    +61 3 8376 6284
                                </p>
                                <p><span class="square-icon"><i class="fa fa-envelope-o"></i></span>+61 3 8376 6284<br>
                                    +61 3 8376 6284
                                </p>
                            </div>
                        </div>
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Account Info</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> My Account</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Order Detail</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Gift Card</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Offers</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Track Order</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Return Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Category</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Women</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Man</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Accessories</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Shoes</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Watch</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Sunglasses</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Shocks</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Information</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Products</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Advanced Search</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Site Map</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> FAQ</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Location</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Terms & Condition</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 wv_social">
                            <ul class="col-md-12 social">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Copyright Footer Block-->
            <div class="bottom-footer">
                <div class="container">
                    <div class="row pad-s15">
                        <div class="col-md-6 copy-right">
                            <p>Copyright © 2017 My Shop All Rights Reserved</p>
                        </div>
                        <div class="col-md-6 payment-method text-right">
                            <ul class="col-md-12 wv_pay">
                                <li><a href=""></a><img src="img/icons/pay1.png" alt=""></li>
                                <li><a href=""></a><img src="img/icons/pay2.png" alt=""></li>
                                <li><a href=""></a><img src="img/icons/pay3.png" alt=""></li>
                                <li><a href=""></a><img src="img/icons/pay4.png" alt=""></li>
                                <li><a href=""></a><img src="img/icons/pay5.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--//=======Footer End=======//--> 
        <div id="quickView" class="modal quickView" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close-modal" data-dismiss="modal">×</button>
                    <div class="modal-body">
                        <div class="quick-view-container">
                            <!--//==Product Item Start==//-->
                            <div class="col-md-12 col-sm-12">
                                <div class="wa-theme-design-block">
                                    <div class="col-md-6 wv_list_img">
                                        <div class="item_left_slider product--image">
                                            <div class="single_display_image"> 
                                                <img class="display-img" alt="" src="img/product/product1.jpg"/> 
                                            </div>
                                            <div class="icon-images"> 
                                                <a href="img/product/product1.jpg"> 
                                                    <img src="img/product/small_product1.jpg" alt="small_product1"/></a> 
                                                    <a href="img/product/product2.jpg"> <img src="img/product/small_product2.jpg" alt="small_product2"/></a> 
                                                    <a href="img/product/product1.jpg"> <img src="img/product/small_product1.jpg" alt="small_product3"/></a> 
                                                    <a href="img/product/product2.jpg"> <img src="img/product/small_product2.jpg" alt="small_product4"/></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wv_list_text wv_single_text">
                                            <div class="block-caption1 wv_single_heading">
                                                <h4 class="responsive_single_title">Lorem Crochet Applique</h4>
                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                    <span class="price-text-color ">T-shirt</span>
                                                </div>
                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                    <ul class="wv_rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><span class="review">1 review</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="price list_price col-md-12">
                                                    <span class="sell-price">$120.00</span>
                                                    <span class="actual-price">$170.00</span>
                                                    <h3>Overview:</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                                                    <div class="single_specification">
                                                        <div class="col-xs-3 col-md-3 single_color_left">
                                                            <h4>Color:</h4>
                                                        </div>
                                                        <div class="col-xs-9 col-md-9 single_color_right wv_widget">
                                                            <ul class="wv_choose_color">
                                                                <li>
                                                                    <input type="checkbox" class="red" name="red" id="beige1">
                                                                    <label class="form-label" for="beige1"></label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" class="pink" name="pink" id="white1">
                                                                    <label for="white1"></label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" class="purple" name="purple" id="black1">
                                                                    <label for="black1"></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="single_specification">
                                                        <div class="col-xs-3 col-md-3 single_size_left">
                                                            <h4>Size:</h4>
                                                        </div>
                                                        <div class="col-xs-9 col-md-9 single_color_right wv_widget">
                                                            <ul class="wv_size">
                                                                <li><a href="#">xs</a></li>
                                                                <li><a href="#">s</a></li>
                                                                <li><a href="#">m</a></li>
                                                                <li><a href="#">l</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="show-item wv_grid_right wv_single_numproduct">
                                                        <div class="box-option responsive_box">
                                                            <select>
                                                                <option>12</option>
                                                                <option>18</option>
                                                                <option>24</option>
                                                            </select>
                                                            <span class="icon"></span>
                                                        </div>
                                                    </div>
                                                    <ul class="shop_list_icon wv_single_icon">
                                                        <li><a href="">ADD TO CART</a></li>
                                                        <li><a href=""><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                    <div class="single_specification specification_social">
                                                        <div class="col-xs-3 col-md-3 single_social_left">
                                                            <h4>Share:</h4>
                                                        </div>
                                                        <div class="col-xs-9 col-md-9 single_color_right wv_widget">
                                                            <ul class="wv_single_social">
                                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!--//==Product Item End==//-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal_backdrop"></div>
            <!-- Switcher Section Start -->
            <div id="style-switcher">
                <h2>Choose Color<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
                <div>
                    <ul class="colors" id="color1">
                        <li>
                            <a href="#" class="color"></a>
                        </li>
                        <li>
                            <a href="#" class="color1"></a>
                        </li>
                        <li>
                            <a href="#" class="color2"></a>
                        </li>
                        <li>
                            <a href="#" class="color3"></a>
                        </li>
                        <li>
                            <a href="#" class="color4"></a>
                        </li>
                        <li>
                            <a href="#" class="color5"></a>
                        </li>
                        <li>
                            <a href="#" class="color6"></a>
                        </li>
                        <li>
                            <a href="#" class="color7"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- / Switcher Section End -->
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="js/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <!-- jQuery plugins library-->
            <script type="text/javascript" src="js/hover-dropdown-menu.js"></script> 
            <script type="text/javascript" src="js/jquery.hover-dropdown-menu-addon.js"></script>   
            <script src="js/owl.carousel.js"></script>  
            <script type="text/javascript" src="js/jquery.countTo.js"></script> 
            <script type="text/javascript" src="js/jquery.appear.js"></script>   
            <script src="js/jquery.mixitup.js"></script>   
            <script src="js/jquery.fancybox.pack.js"></script>
            <script src="js/jquery.fancybox-media.js"></script>
            <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
            <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
            <script type="text/javascript" src="js/switcher.js"></script> 
            <!-- Custom JS -->
            <script type="text/javascript" src="js/main.js"></script> 
        </body>
        </html>