
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
                                        <a href="#">USD <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">English <i class="fa fa-caret-down"></i></a>
                                        <ul>
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
                                        <a href="#">English <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Français</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">USD <i class="fa fa-caret-down"></i></a>
                                        <ul>
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
                        <a class="logo" href="index.html">
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
                                    <!-- Pages Menu Ends -->
                                    <li class="mega-menu">
                                        <a href="">Category <span class="caret menu-arrow"></span></a>
                                        <ul class="dropdown-menu wv_menu_color">
                                            <li>
                                                <!-- Home Mage Menu grids Begins -->
                                                <div class="row">
                                                    <!-- Home Variation 1 Block -->
                                                    <div class="col-sm-3">
                                                        <!-- Title -->
                                                        <h6 class="title">Mens</h6>
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
                                                        <h6 class="title">Womens</h6>
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
                                                        <h6 class="title">Accessories</h6>
                                                        <!-- Links -->
                                                        <div class="page-links">
                                                            <div>
                                                                <a href="#">Shoes</a>
                                                            </div>
                                                            <div>
                                                                <a href="#">Watches</a>
                                                            </div>
                                                            <div>
                                                                <a href="#">Bags</a>
                                                            </div>
                                                            <div>
                                                                <a href="#">Jwellery</a>
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
                                                <a href="shopping-cart.html">shopping cart</a>
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
<!--//==Page Header Start==//-->
<div class="wv_breadcrumb">
    <div class="container breadcrumb-section">
        <div class="row pad-s15">
            <div class="col-md-12">
                <div class="clear"></div>
                <div class="breadcrumb-box">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="index.html">Shop</a>
                        </li>
                        <li class="active">Women</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//==Page Header End==//-->
<!--//==Shop Single Page Start==//-->
<section class="shop-page">
    <div class="container">
        <div class="row pad-s15">
            <!--//==Shop Page Sidear Start==//-->
            <div class="col-md-3 col-sm-4">
                <div class="row">
                    <div class="sidebar">
                        <!--//==Widget Item==//-->
                        <div class="col-md-12">
                            <div class="wv_widget marB30">
                                <h3>Categories</h3>
                                <!--//==Product Category List End==//-->
                                <ul class="list1">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-chevron-right wv-arrowright" aria-hidden="true"></i>
                                            <div class="clearfix wv_category"><span class="pull-left">Men Fashion</span></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-chevron-right wv-arrowright" aria-hidden="true"></i>
                                            <div class="clearfix wv_category"><span class="pull-left">Women Fashion</span></div>
                                        </a>
                                    </li>
                                    <li class="current">
                                        <a href="#">
                                            <i class="fa fa-chevron-right wv-arrowright" aria-hidden="true"></i>
                                            <div class="clearfix wv_category"><span class="pull-left">Jackets</span></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-chevron-right wv-arrowright" aria-hidden="true"></i>
                                            <div class="clearfix wv_category"><span class="pull-left">Casual Dresses</span></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-chevron-right wv-arrowright" aria-hidden="true"></i>
                                            <div class="clearfix wv_category"><span class="pull-left">Men Suits</span></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-chevron-right wv-arrowright" aria-hidden="true"></i>
                                            <div class="clearfix wv_category"><span class="pull-left">Accessories</span></div>
                                        </a>
                                    </li>
                                </ul>
                                <!--//==Product Category List End==//-->
                            </div>
                        </div>
                        <!--//==Widget Item==//-->
                        <div class="col-md-12">
                            <div class="wv_widget1 marB30">
                                <h3>Filter By Price</h3>
                                <!--//==Product Price List Start==//-->
                                <!--price filter-->
                                <div class="rslt__fltr ui-nav-menu state--expanded">
                                    <ul class="ui-nav-menu-opts">
                                        <li class="menu__fltr fltr-type__sldr">
                                            <div class="js-price-slider"></div>
                                        </li>
                                        <li class="menu__fltr fltr-type__sldr"></li>
                                    </ul>
                                </div>
                                <div class="price_result">
                                    <h4>Price : <span class="wv_price_result" id="price_show">$0k - $250k</span></h4>
                                </div>
                                <!--//==Product Price List End==//-->
                            </div>
                        </div>
                        <!--//==Widget Item==//-->
                        <div class="col-md-12">
                            <div class="wv_widget marB30">
                                <h3>filter by size</h3>
                                <!--//==Product Size List Start==//-->
                                <ul class="wv_size">
                                    <li><a href="#">xs</a></li>
                                    <li><a href="#">s</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">l</a></li>
                                    <li><a href="#">xl</a></li>
                                    <li><a href="#">xxl</a></li>
                                </ul>
                                <!--//==Product Size List End==//-->  
                            </div>
                        </div>
                        <!--//==Widget Item==//-->
                        <div class="col-md-12">
                            <div class="wv_widget marB30">
                                <h3>filter by color</h3>
                                <!--//==Product Size List Start==//-->
                                <ul class="wv_choose_color">
                                    <li>
                                        <input type="checkbox" class="red" name="red" id="beige">
                                        <label class="form-label" for="beige"> Red</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="pink" name="pink" id="white">
                                        <label for="white"> Pink</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="purple" name="purple" id="black">
                                        <label for="black"> Purple </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="blue" name="blue" id="orange">
                                        <label for="orange"> Blue</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="green" name="green" id="blue">
                                        <label for="blue"> green</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="yellow" name="yellow" id="green">
                                        <label for="green"> Yellow</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="black" name="black" id="yellow">
                                        <label for="yellow"> Black</label>
                                    </li>
                                </ul>
                                <!--//==Product Size List End==//-->  
                            </div>
                        </div>
                        <!--//==Widget Item==//-->
                        <div class="col-md-12">
                            <div class="wv_widget marB30">
                                <h3>Trending items</h3>
                                <!--//==Product Size List Start==//-->
                                <div class="wv_trending">
                                    <div class="col-xs-4 col-md-4 trending_image">
                                        <img src="img/all/trending1.jpg" alt="trending image">
                                    </div>
                                    <div class="col-xs-8 col-md-8 trending_text">
                                        <h2>Brand Name</h2>
                                        <p>Lorem ipsum dolor</p>
                                        <h4>$ 100.00</h4>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="wv_trending">
                                    <div class="col-xs-4 col-md-4 trending_image">
                                        <img src="img/all/trending2.jpg" alt="trending image">
                                    </div>
                                    <div class="col-xs-8 col-md-8 trending_text">
                                        <h2>Brand Name</h2>
                                        <p>Lorem ipsum dolor</p>
                                        <h4>$ 100.00</h4>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="wv_trending">
                                    <div class="col-xs-4 col-md-4 trending_image">
                                        <img src="img/all/trending3.jpg" alt="trending image">
                                    </div>
                                    <div class="col-xs-8 col-md-8 trending_text">
                                        <h2>Brand Name</h2>
                                        <p>Lorem ipsum dolor</p>
                                        <h4>$ 100.00</h4>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <!--//==Product Size List End==//-->  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//==Shop Page Sidear End==//-->
            <!--//==Shop Page Product Section Start==//-->
            <div class="col-md-9 col-sm-8 wvshop_right">
                <div class="row">
                    <!--//==Product Item Start==//-->
                    <div class="col-md-12 col-sm-12 marB30">
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
                                                <li><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
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
                    <section class="tabs">
                        <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
                        <label for="tab-1" class="col-xs-6 col-md-3 tab-label-1">Description</label>
                        <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
                        <label for="tab-2" class="col-xs-6 col-md-3 tab-label-2">Information</label>
                        <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
                        <label for="tab-3" class="col-xs-12 col-md-3 tab-label-3">Review</label>
                        <div class="clear-shadow"></div>
                        <div class="content">
                            <div class="content-1">
                                <h2>Product Description</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit.</p>
                            </div>
                            <div class="content-2">
                                <h2>Product Information</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit.</p>
                            </div>
                            <div class="content-3">
                                <h2>Review</h2>
                                <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
                            </div>
                        </div>
                    </section>
                    <!--//======= Women Section Start=======//-->
                    <section class="wv-main-women padT70 padB70">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wv-heading-style1 pad-s15">
                                    <h2>Related product</h2>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row pad-s15">
                                    <div class="owl-carousel-style1 owl_sub" id="women-single-carousel">
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
                            </div>
                        </div>
                    </section>
                    <!--//======= Women Section End=======//-->  		
                </div>
                <!--//==Shop Page Product Section End==//-->
            </div>
        </div>
    </section>
    <!--//==Shop Single Page End==//-->
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
                                                                <input type="checkbox" class="red" name="red" id="beige2">
                                                                <label class="form-label" for="beige2"></label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="pink" name="pink" id="white2">
                                                                <label for="white2"></label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" class="purple" name="purple" id="black2">
                                                                <label for="black2"></label>
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
        <script src='js/jquery-ui.min.js'></script>
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